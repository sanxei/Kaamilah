/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      fontFamily:{
        whisper: ['Whisper', 'cursive'],
        bodoni: ['"Libre Bodoni"', 'serif'],
      }
    },
  },
  plugins: [],
}

