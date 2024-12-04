/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./node_modules/flowbite/**/*.js",
    "./**sc/*.{js,jsx,ts,tsx,html,php}",
    "./page/*.{js,jsx,ts,tsx,html,php}",
    "./style/*.{js,jsx,ts,tsx,html,php}",
    "./index.php",
    "./page/home.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

