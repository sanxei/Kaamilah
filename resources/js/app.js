import './bootstrap';
import particlesJS from 'particles.js';

window.onload = function() {
  particlesJS.load('particles-js', '/path/to/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });
};

/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });   