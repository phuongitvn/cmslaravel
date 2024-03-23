import './bootstrap';
 // Added: Actual Bootstrap JavaScript dependency
 import 'bootstrap';

 // Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';

import { themeChange } from 'theme-change';

themeChange();

var selectedTheme = localStorage.getItem("theme");
if(selectedTheme === 'dark') {
    document.getElementById("theme-change").checked = true;
}