/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      fontFamily: {
        Prompt: ["Prompt", "sans-serif"],
      },
      colors: {
        'tvs-orange-1': '#ED3212',
        'tvs-dark-1': '#181818',
      },
    },
    container: {
      center: true,
    },
  },
  plugins: [],
};

export default config;
