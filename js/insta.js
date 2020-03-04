window.onload = function socialEnding() {

    function urlReading() {
        let urlRead = window.location.search;
        console.log(urlRead);
        if (urlRead != '') {
            var searchUrl = urlRead.replace('?', '');
            console.log(searchUrl);
            instaEnding(searchUrl);
        }
    }
    urlReading();

    document.querySelector('#userName').addEventListener('keyup', function(event) {
        if (event.keyCode === 13) {
            formValue();
        }
    });

    document.querySelector('#userNamePreview').addEventListener('keyup', function(event) {
        if (event.keyCode === 13) {
            formValuePreview();
        }
    });

    document.querySelector('#searchButton').onclick = function() {
        formValuePreview();
    }

    function formValue() {
        var witchName = document.querySelector('#userName').value;
        instaEnding(witchName);
    }

    function formValuePreview() {
        var witchNamePreview = document.querySelector('#userNamePreview').value;
        document.querySelector('#profilExport').classList.remove('showProfilExport');
        var previewImage = document.querySelectorAll('.preview-img');
        for (let i = 0; i <= 8; i++) {
            previewImage[i].src = ' ';
        }
        instaEnding(witchNamePreview);
    }

    function instaEnding(username) {
        var api = 'https://www.instagram.com/' + username + '/?__a=1';

        fetch (api)
            .then((response) => {
                return response.json();
            })
            .then((instaApi) => {
                document.querySelector('#profilImg').src = instaApi.graphql.user.profile_pic_url_hd;
                document.querySelector('#fullName').textContent = instaApi.graphql.user.full_name;
                document.querySelector('#follower').textContent = instaApi.graphql.user.edge_followed_by.count;
                document.querySelector('#following').textContent = instaApi.graphql.user.edge_follow.count;
                document.querySelector('#biography').textContent = instaApi.graphql.user.biography;
                document.querySelector('#externalUrl').textContent = instaApi.graphql.user.external_url;
                document.querySelector('#externalUrl').href = instaApi.graphql.user.external_url;
                document.querySelector('#fullNameImg').textContent = instaApi.graphql.user.full_name;
                document.querySelector('#posts').textContent = instaApi.graphql.user.edge_owner_to_timeline_media.count;

                //Images
                var previewImage = document.querySelectorAll('.preview-img');
                for (let i = 0; i <= 8; i++) {
                    previewImage[i].src = instaApi.graphql.user.edge_owner_to_timeline_media.edges[i].node.display_url;
                }
            });
        
        document.querySelector('#startForm').classList.add('dontShowStartForm');
        document.querySelector('#loadingScreen').classList.add('showLoadingScreen');

        setTimeout(function showContent() {
            document.querySelector('#loadingScreen').classList.remove('showLoadingScreen');
            document.querySelector('#profilExport').classList.add('showProfilExport');
        }, 2500);
    }

}