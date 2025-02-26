import 'bootstrap';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import { Russian } from "flatpickr/dist/l10n/ru.js"

document.addEventListener("DOMContentLoaded", function () {
    flatpickr(".datepicker", {
        enableTime: false,
        dateFormat: "Y-m-d",
        "locale": Russian 
    });
});
