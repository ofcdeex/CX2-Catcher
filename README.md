# Usage
```js
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault()
        const data = Object.fromEntries(new FormData(e.target).entries());

        fetch("URL_SITE/api/catcher", {
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'form=' + JSON.stringify(data)
        });

    });
```
