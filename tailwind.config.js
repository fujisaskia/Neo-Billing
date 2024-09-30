/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        smallbounce: {
          '0%, 100%': { transform: 'translateY(-10px)' }, // Membatasi tinggi bounce
          '50%': { transform: 'translateY(0)' },
        },
      },

      scrollBehavior: {
        smooth: 'smooth',
      },
      animation: {
        smallbounce: 'smallbounce 4s infinite', // Mengatur durasi animasi
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      borderRadius: {
        'b-custom': '44px', // Custom rounded for bottom 3xl
      },
    },
  },

  variants: {
    extend: {
      scrollBehavior: ['responsive'],
    },
  },
  
  plugins: [],
}