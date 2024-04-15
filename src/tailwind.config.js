/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './bin/**/*.css',
    './html/**/*.html',
    './assets/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Gotham-Pro']
      },
      colors: {
        'green': {
          10: '#c3e6cd',
          800: '#22612B',
          850: '#22612B',
          900: '#22612B',
          950: '#042507',
        },
        'yellow': {
          300: '#FCDC00',
          500: '#F79E1B',
        },
        'orange': {
          500: '#EC673C',
        },
        'red': {
          500: '#8B2628',
        },
        'gray': {
          950: '#1D1D1B',
        }
      },
      screens: {
        'm': '280px',
        's': '360px',
        '2xl': '1320px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/container-queries'),
  ],
}