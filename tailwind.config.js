/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    container: {
      center: true,
    },

    extend: {
      backgroundImage: {
        'bg-aircraft-all': "",
      },
      fontFamily: {
        display: 'Oswald, ui-serif',
      },
      colors: {
        whitePrimary: 'var(--white-primary)',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

