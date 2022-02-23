window.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;

(function () {
    
    if (document.getElementById("drophere")) {
        
        let csrfToken = document.querySelector("meta[name='csrf-token']")
        .getAttribute('content')
        console.log(csrfToken);
        let uniqueSecret = document.querySelector("input[name='uniqueSecret']")
        .getAttribute('value')
        
        let myDropzone = new Dropzone.default('#drophere', {
            url: '/ad/images/upload',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            params: {
                uniqueSecret: uniqueSecret
            },
            addRemoveLinks: true,
            
            init: () => {
                fetch(`/ad/images?uniqueSecret=${uniqueSecret}`, {
                    method: 'GET',
                })
                .then(response => response.json())
                .then(data => {
                    data.forEach(image => {
                        let file = {
                            serverId: image.id,
                            name: image.name,
                            size: image.size,
                        }
                        
                        myDropzone.options.addedfile.call(myDropzone, file)
                        myDropzone.options.thumbnail.call(myDropzone, file, image.src)
                        myDropzone.options.success.call(myDropzone, file)
                        myDropzone.options.complete.call(myDropzone, file)
                    });
                })
            }
        });
        
        myDropzone.on('success', function (file, response) {
            file.serverId = response.id
        })
        myDropzone.on("removedfile", function (file) {
            fetch('/ad/images/remove', {
                method: 'DELETE', // *GET, POST, PUT, DELETE, etc.
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: csrfToken,
                    uniqueSecret: uniqueSecret,
                    id: file.serverId
                })
            })
        })
    }
})();
