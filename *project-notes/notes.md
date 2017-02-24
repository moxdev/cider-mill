<a class="mm4" href="https://www.mm4solutions.com/" target="_blank" id="mms">Website by Millennium Marketing Solutions</a>

# Colors
$color__brand-brown: #513628;
$color__brand-red: #a31f34;
$color__brand-pink: #e6ccb7;


# Fonts
$font__alex: 'AlexBrush-Regular', sans-serif;
$font__light: 'SourceSansPro-Light', sans-serif;
$font__semi: 'SourceSansPro-Semibold', sans-serif;
$font__bold: 'SourceSansPro-Bold', sans-serif;
$font__regular: 'SourceSansPro-Regular', sans-serif;

# Breakpoints
$breakpoints: (
  'x-small'    : ( min-width:  310px ),
  'small'      : ( min-width:  400px ),
  'small-land' : ( min-width:  560px ),
  'tablet'     : ( min-width:  760px ),
  'medium'     : ( min-width:  960px ),
  'large'      : ( min-width: 1200px ),
  'x-large'    : ( min-width: 1500px ),
  'xx-large'   : ( min-width: 1800px )
);

# Font sizes

## fp header
21px = 1.313rem
32px = 2rem
55px = 3.438rem

## Mobile
12px = 0.75rem
13px = 0.8125rem
14px = 0.875rem
15px = 0.9375rem
16px = 1rem (base)
17px = 1.063rem
18px = 1.125rem
19px = 1.188rem
20px = 1.25rem
21px = 1.313rem
23px = 1.438rem
26px = 1.625rem
31px = 1.938rem
32px = 2rem
35px = 2.188rem
40px = 2.5rem
55px = 3.438rem

## Desktop

12px = 0.75rem
16px = 1rem (base)
21px = 1.313rem
22px = 1.375rem
23px = 1.438rem
36px = 2.25rem
45px = 2.813rem
48px = 3rem
65px = 4.063rem


# Center text with flexbox
```css
 figure {
     @include reset;
     max-height: 300px;
     display: flex;            /* establish flex container */
     flex-direction: column;   /* stack flex items vertically */
     position: relative;       /* establish neares positioned ancenstor for absolute positioning */
     overflow: hidden;

     img {
         min-height: 200px;

     }

     h1 {
         color:#fff;
         font-size: 1.625rem;
         position: absolute;
         top: 2em;
         right: 1em;
         bottom: 0;
         left: 1em;
        transform: translate(-10%, -50%);
         font-weight: bold;
         margin:0;
         padding:0;

     }

     .center-aligned {
         display: flex;
         align-items: center;
         justify-content:center;
     }
 }
````