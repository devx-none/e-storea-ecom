module.exports = {
  purge: [],

  purge: ['./public/index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
    },
    colors: {
      blue: {
        dark :'#031F2C',
      }
    },
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        primary: '#EFD65F',
      
      },
      fontFamily:{
        poppins:  "'Poppins', sans-serif",
        roboto:  "'Roboto', sans-serif",
      }
    },
  },
  variants: {
    extend: {
      visibility: ['group-hover'],
      display: ['group-hover']
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
