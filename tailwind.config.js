import defaultTheme from "tailwindcss/defaultTheme";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    light: "#8EC5FC", // Light blue gradient start
                    DEFAULT: "#007BFF", // Primary blue
                    dark: "#0056B3", // Dark blue
                },
                secondary: {
                    light: "#FFE4E1", // Light coral
                    DEFAULT: "#FF7F50", // Coral
                    dark: "#D2691E", // Chocolate
                },
                accent: {
                    light: "#CFFAFE", // Light cyan
                    DEFAULT: "#06B6D4", // Cyan
                    dark: "#0E7490", // Dark cyan
                },
                neutral: {
                    light: "#F3F4F6", // Light gray
                    DEFAULT: "#9CA3AF", // Neutral gray
                    dark: "#1F2937", // Dark gray
                },
                success: colors.green,
                error: colors.red,
                warning: colors.yellow,
            },
            fontFamily: {
                sans: ["Inter", "Roboto", "Helvetica", "Arial", "sans-serif"],
                serif: ["Merriweather", "serif"],
                mono: ["Fira Code", "monospace"],
            },
            fontSize: {
                xs: "0.75rem",
                sm: "0.875rem",
                base: "1rem",
                lg: "1.125rem",
                xl: "1.25rem",
                "2xl": "1.5rem",
                "3xl": "1.875rem",
                "4xl": "2.25rem",
                "5xl": "3rem",
                "6xl": "3.75rem",
            },
            spacing: {
                "1/2": "50%",
                "1/3": "33.333%",
                "2/3": "66.666%",
                "1/4": "25%",
                "3/4": "75%",
                full: "100%",
                screen: "100vh",
            },
            maxWidth: {
                xs: "20rem",
                sm: "24rem",
                md: "28rem",
                lg: "32rem",
                xl: "36rem",
                "2xl": "42rem",
                "3xl": "48rem",
                "4xl": "56rem",
                "5xl": "64rem",
                "6xl": "72rem",
                "7xl": "80rem",
                full: "100%",
            },
            minWidth: {
                xs: "20rem",
                sm: "24rem",
                md: "28rem",
                lg: "32rem",
                xl: "36rem",
            },
            boxShadow: {
                sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
            },
            borderRadius: {
                none: "0",
                sm: "0.125rem",
                DEFAULT: "0.25rem",
                md: "0.375rem",
                lg: "0.5rem",
                full: "9999px",
            },
        },
    },
    plugins: [],
};

// const colors = require('tailwindcss/colors');

// module.exports = {
//   content: [
//     './resources/**/*.blade.php',
//     './resources/**/*.js',
//     './resources/**/*.vue',
//   ],
//   theme: {
//     extend: {
//       colors: {
//         primary: {
//           light: '#8EC5FC', // Light blue gradient start
//           DEFAULT: '#007BFF', // Primary blue
//           dark: '#0056B3', // Dark blue
//         },
//         secondary: {
//           light: '#FFE4E1', // Light coral
//           DEFAULT: '#FF7F50', // Coral
//           dark: '#D2691E', // Chocolate
//         },
//         accent: {
//           light: '#CFFAFE', // Light cyan
//           DEFAULT: '#06B6D4', // Cyan
//           dark: '#0E7490', // Dark cyan
//         },
//         neutral: {
//           light: '#F3F4F6', // Light gray
//           DEFAULT: '#9CA3AF', // Neutral gray
//           dark: '#1F2937', // Dark gray
//         },
//         success: colors.green,
//         error: colors.red,
//         warning: colors.yellow,
//       },
//       fontFamily: {
//         sans: ['Inter', 'Roboto', 'Helvetica', 'Arial', 'sans-serif'],
//         serif: ['Merriweather', 'serif'],
//         mono: ['Fira Code', 'monospace'],
//       },
//       fontSize: {
//         xs: '0.75rem',
//         sm: '0.875rem',
//         base: '1rem',
//         lg: '1.125rem',
//         xl: '1.25rem',
//         '2xl': '1.5rem',
//         '3xl': '1.875rem',
//         '4xl': '2.25rem',
//         '5xl': '3rem',
//         '6xl': '3.75rem',
//       },
//       spacing: {
//         '1/2': '50%',
//         '1/3': '33.333%',
//         '2/3': '66.666%',
//         '1/4': '25%',
//         '3/4': '75%',
//         'full': '100%',
//         'screen': '100vh',
//       },
//       maxWidth: {
//         xs: '20rem',
//         sm: '24rem',
//         md: '28rem',
//         lg: '32rem',
//         xl: '36rem',
//         '2xl': '42rem',
//         '3xl': '48rem',
//         '4xl': '56rem',
//         '5xl': '64rem',
//         '6xl': '72rem',
//         '7xl': '80rem',
//         full: '100%',
//       },
//       minWidth: {
//         xs: '20rem',
//         sm: '24rem',
//         md: '28rem',
//         lg: '32rem',
//         xl: '36rem',
//       },
//       boxShadow: {
//         sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
//         DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
//         md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
//         lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
//         xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
//       },
//       borderRadius: {
//         none: '0',
//         sm: '0.125rem',
//         DEFAULT: '0.25rem',
//         md: '0.375rem',
//         lg: '0.5rem',
//         full: '9999px',
//       },
//     },
//   },
//   plugins: [],
// };
