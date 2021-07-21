const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    './layouts/**/*.html'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
    },
    colors:{
      black: colors.black,
      white: colors.white,
      blue: colors.blue,
      gray: colors.gray,
      mgray: '#f5f4fa',
      mdgray: '#b3b3b3',
      mblue: '#2968f8',
      mlgreen:'#3ec512'
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
