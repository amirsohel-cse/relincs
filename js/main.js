

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function clientSocket(config = {}) {
    let route = config.route || "findsaman.ir";
    let port = config.port || "3280";
    window.Websocket = window.WebSocket || window.MozWebSocket;
    return new WebSocket("ws://" + route + ":" + port);
}

var connection = clientSocket();



window.addEventListener('event-voting', event => {
    console.log(event.detail);
    connection.send(JSON.stringify({
        EvideoId: event.detail.video_id,
        EuserId: event.detail.user_id,
        username: event.detail.username,
        title: event.detail.title,
        message: event.detail.message,
        image_profile: event.detail.image_profile,
    }));
});

// connection.onopen = () => {
//     console.log('Connection is open !!! ✅');
// };

// connection.onmessage = function(message) {
//     var results = JSON.parse(message.data);
//     var audio = new Audio('https://notificationsounds.com/storage/sounds/file-sounds-1150-pristine.mp3');
//     var playPromise = audio.play();
//     if (playPromise !== undefined) {
//         playPromise.then(_ => {
//                 audio.play();
//             })
//             .catch(error => {
//                 console.log(error);
//             });
//     }

//     var event = document.querySelector('.addevent');

//     var html = event.innerHTML;
//     event.innerHTML = `
//     <li class="flex w-full border-b pb-1 mt-1">
//     <div class="flex items-center hover:bg-gray-100 rounded-lg px-1 py-1 cursor-pointer">
//         <div class="flex flex-shrink-0 items-end relative">
//             <img class="h-14 w-14 rounded-full" src="${results.image_profile}" alt="saman">
//             <div class="absolute bottom-0 right-0 border shadow-lg rounded-full border-gray-300 bg-white p-1 flex justify-center items-center">
//                 <svg class="w-3 h-3 fill-current text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
//             </div>
//         </div>
//         <div class="ml-3">
//             <span class="font-medium text-sm">${results.title}</span>
//             <p class="lg:text-sm text-xs text-bold">${results.username} , ${results.message}</p>
//             <span class="text-xs text-blue-900 text-opacity-60 font-medium">${results.time}</span>
//         </div>
//     </div>
//     </li>`;
// }

const image_input = document.querySelector("#image");
image_input.addEventListener("change", function() {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        const uploaded_image = reader.result;
        document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
});

// var one = document.querySelector('one');
// var two = document.querySelector('two');
// var there = document.querySelector('there');
// var four = document.querySelector('four');
// var faive = document.querySelector('faive');
// one.addEventListener('click', (e) => {
//     e.preventDefault();
//     alert('sdsd');
// });
