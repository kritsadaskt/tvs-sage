/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      fontFamily: {
        prompt: ["Prompt", "sans-serif"],
        baijam: ["Bai Jamjuree", "sans-serif"],
      },
      colors: {
        'tvs-orange-1': '#ED3212',
        'tvs-dark-1': '#181818',
        'tvs-dark-2': '#111111',
        'tvs-gray-1': '#555555',
        'tvs-gray-2': '#484848',
        'tvs-light-gray': '#B8B8B8',
        'tvs-light-gray-2': '#CCCCCC',
      },
      aspectRatio: {
        '4/3': '4 / 3',
      },
    },
    container: {
      center: true,
    },
  },
  plugins: [],
};

export default config;
