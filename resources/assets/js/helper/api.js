const yesterday = new Date(Date.now() - 86400000)

const apiToLocalStorage = (key, apiKey) => {

    return new Promise(function (resolve, reject) {
        let data = JSON.parse(localStorage.getItem(key))

        if (!data || data?.time < yesterday) {
             fetch(`/api/${apiKey}`)
                .then((r) => r.json())
                .then((r) => r.data)
                .then((r) => {
                    localStorage.setItem(key, JSON.stringify({
                        'items': r,
                        'time': new Date()
                    }))
                    resolve(r)
                })

        } else {
            resolve(data.items);
        }
    })
}

export { apiToLocalStorage }