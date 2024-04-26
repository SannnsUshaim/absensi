/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./view/**/*.php", "./*.php"],
  theme: {
    extend: {
      screens: {
        'sm' : '320px',
      }
    },
  },
  plugins: [],
}

