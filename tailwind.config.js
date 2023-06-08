/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./node_modules/flowbite/**/*.js",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
],
  safelist: [
    'w-64',
    'w-1/2',
    'rounded-l-lg',
    'rounded-r-lg',
    'bg-gray-200',
    'grid-cols-4',
    'grid-cols-7',
    'h-6',
    'leading-6',
    'h-9',
    'leading-9',
    'shadow-lg',
    'bg-opacity-50',
    'dark:bg-opacity-80'
  ],
  darkMode: "class",
  theme: {
    container:{
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '7rem',
        '2xl': '9rem',
      },
    },
    extend: {
      colors: {
        primary: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a" },
        "page-login":"#f5f8fa",
        "main":'#0499b3',
        "borderForm":"#10b981",
        "first-bg-c":"#0D28A6",
        "second-bg-c":"#F1F3FF",
        "third-bg-c":"#CFD4ED",
        "first-bg-c-btn":"#5CB85F",
        "first-c-text":"#ffffff",
        "primary-bg-c":"#0D28A6",
        "fourth-bg-c":"#F1F3FF",
        "main":"#0ae88d"
        // "bg-dot":""
      },
      fontSize:{
        "first-size-h":"36px",
        "second-size-h":"30px",
        "first-size-t":"16px"
      },
      fontFamily: {
        'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
        'body': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
        'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace'],
        'main':['poppins',"sans-serif"],
        "myFont" :["Montserrat"],
      },
      transitionProperty: {
        'width': 'width'
      },
      textDecoration: ['active'],
      minWidth: {
        'kanban': '28rem'
      },
      animation:{
        'custom-ping':'load 1s ease-out infinite',
        'fadeUp':"fadeUp 450ms ease-in-out",
        bubble1:"bubble1 6s linear infinite",
        slider:"wiggle 400ms linear",
        await:"await 400ms linear 10s",
        fadeUpOnce:"fadeUp 400ms ease-in-out",
        fadeIn:"fadeIn 400ms ease-in-out",
        fadeUpButtonOnce:"fadeUpButton 400ms ease-in-out forwards"
      },
      keyframes:{
        load:{
          '0%':{
            background:'#0499b3',
            border:'0px solid #0499b3'
          },
          '50%':{
            background:'#0499b3',
            border:'100px solid #fff'
          },
          '100%':{
            background:'#0499b3',
            broder:'0px solid #fff'
          }
        },
        fadeUp:{
            "0%":{
              transform: 'translateY(-200px) scale(0)',
            },
            "100%":{
              transform:"translateY(0)",
            }
        },
        fadeIn:{
          "0%":{
            transform: 'translateX(-200px)',
          },
          "100%":{
            transform:"translateX(0)",
          }
      },
        wiggle:{
          '0%': { transform: 'translateX(50%)' },
        },
        await:{
          "0%":{transform:'translateX(100%)'},
        },
        bubble1:{
          "50%":{ transform:'translateX(50%) translateY(-30%)'}
        },
        fadeUpButton:{
          '0%':{transform:'translateY(0%)'},
          '100%':{transform:'translateY(-50%)  translateX(-50%) scale(0)'},
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

