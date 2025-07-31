/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./**/*.php'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '0.9375rem',
      },
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#025CA0',
        },
        'ss-blue': {
          DEFAULT: '#025CA0',
          100: '#F2F7FA',
          700: '#5F91BA',
          800: '#013A65',
          900: '#01213A',
        },
        'ss-navy-blue': {
          DEFAULT: '#0B1424',
        },
        'ss-orange': {
          DEFAULT: '#FB9D2F',
          100: '#F2A709',
        },
        'ss-gray': {
          DEFAULT: '#282828',
          900: '#101010',
        },
        danger: {
          DEFAULT: '#dc3545',
        },
      },
      screens: {
        '2xl': '1310px',
      },
      fontFamily: {
        base: ['Barlow', ...defaultTheme.fontFamily.sans],
        lead: ['Cinzel', ...defaultTheme.fontFamily.sans],
        icomoon: ['icomoon'],
      },
    },
  },
  plugins: [],
}
