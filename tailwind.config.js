/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.css.js",
    "./templates/**/*.php",
  ],
  theme: {
    extend: {
      spacing: {
        '128': '32rem',
        '130': '50rem',
      }
    },
  },
  plugins: [],
}