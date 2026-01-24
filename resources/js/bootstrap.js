import axios from "axios";
window.axios = axios;
import { Loader } from "@googlemaps/js-api-loader";

const loader = new Loader({
    apiKey: "",
    version: "weekly",
    libraries: ["places"],
});

const mapOptions = {
    center: {
        lat: 40.98566301773933,
        lng: 29.039167180174346,
    },
    zoom: 18,
};

loader
    .importLibrary("maps")
    .then(({ Map }) => {
        const map = new Map(document.getElementById("map"), mapOptions);

        // Marker ekleyelim
        const marker = new google.maps.Marker({
            position: { lat: 40.98566301773933, lng: 29.039167180174346 },
            map: map,
            icon: {
                url: "/storage/marker.png", // PNG ikonunun URL'si
                scaledSize: new google.maps.Size(53, 76), // İkonun boyutu (isteğe göre ayarlayabilirsin)
            },
        });
    })
    .catch((e) => {});

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
