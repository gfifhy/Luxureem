/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./frontend/**/*.{html,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'custom-brown': '#e2bb9c',
      'custom-darkbrown': '#a2724e'
    },
    fontFamily: {
      serif: ['Zilla Slab', 'serif']
    },
    extend: {},
  },
  plugins: [
     require('flowbite/plugin')
    ],
}

