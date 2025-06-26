# Rank-Math-FAQ-Block-Accordion
Convert Rank Math FAQ Block to Accordion
# Rank Math FAQ Accordion

A lightweight, customizable accordion solution for Rank Math FAQ blocks. Transform your static FAQ sections into interactive, animated accordions with smooth transitions and modern styling.

![Rank Math FAQ Accordion](screenshots/faq-accordion-demo.png)

## ✨ Features

- 🎯 **Smooth Animations** - Buttery smooth slide transitions (300ms)
- 🎨 **Modern Design** - Clean, card-like appearance with subtle shadows
- ♿ **Accessible** - Full keyboard navigation support (Enter/Space keys)
- 📱 **Responsive** - Optimized for mobile and desktop devices
- 🎪 **Customizable** - Easy to modify colors, spacing, and animations
- ⚡ **Lightweight** - No external dependencies, pure CSS + jQuery
- 🔧 **Easy Integration** - Simple copy-paste installation

## 🚀 Installation

### Method 1: Child Theme (Recommended)

1. **Copy the function** from `functions.php` in this repository
2. **Paste it** into your child theme's `functions.php` file
3. **Save the file** and test on your website

### Method 2: Custom Plugin File

1. **Create a new file** called `rank-math-accordion.php` in your theme directory
2. **Copy the entire function** from `functions.php`
3. **Add this line** at the top of the file:
   ```php
   <?php
   // Rank Math FAQ Accordion Function
   ```
4. **Include the file** in your theme's `functions.php`:
   ```php
   require_once get_template_directory() . '/rank-math-accordion.php';
   ```

## 📋 Requirements

- WordPress 5.0+
- Rank Math SEO Plugin
- jQuery (usually included with WordPress)
- Child theme or custom theme with `functions.php` access

## 🎨 Customization

### Colors
```css
/* Change background colors */
.rank-math-list {
    background: #your-color; /* Main container */
}

#rank-math-faq .rank-math-list-item h3:hover {
    background-color: #your-hover-color; /* Question hover */
}

#rank-math-faq .rank-math-answer {
    background-color: #your-answer-color; /* Answer background */
}
```

### Animation Speed
```javascript
// In the JavaScript section, change 300 to your preferred duration
$answer.slideDown(300); // 300ms = 0.3 seconds
$answer.slideUp(300);
```

### Arrow Icon
```css
/* Replace the SVG in the background-image property */
#rank-math-faq .rank-math-list-item h3:after {
    background-image: url("your-custom-svg");
}
```

## 🔧 How It Works

### JavaScript Logic
1. **Adds invisible checkboxes** to each FAQ item
2. **Handles click events** on FAQ questions
3. **Toggles slide animations** using jQuery's `slideDown()` and `slideUp()`
4. **Manages arrow rotation** via CSS classes
5. **Supports keyboard navigation** for accessibility

### CSS Styling
1. **Card-like container** with shadows and rounded corners
2. **Flexbox layout** for proper arrow positioning
3. **Smooth transitions** for all interactive elements
4. **Responsive design** with mobile optimizations
5. **Accessibility features** with focus states

## 📱 Responsive Design

The accordion automatically adapts to different screen sizes:

- **Desktop**: Full padding and larger fonts
- **Tablet**: Slightly reduced spacing
- **Mobile**: Compact design with smaller icons and fonts

## ♿ Accessibility Features

- **Keyboard Navigation**: Use Tab, Enter, and Space keys
- **Focus Indicators**: Clear visual feedback for keyboard users
- **Screen Reader Friendly**: Proper semantic structure
- **ARIA Compatible**: Ready for accessibility enhancements

## 🐛 Troubleshooting

### FAQ Not Working?
1. **Check jQuery**: Ensure jQuery is loaded on your site
2. **Verify Selectors**: Make sure your FAQ has the class `rank-math-list`
3. **Console Errors**: Check browser console for JavaScript errors
4. **Theme Conflicts**: Test with a default theme to isolate issues

### Styling Issues?
1. **CSS Specificity**: Your theme CSS might be overriding the styles
2. **Add `!important`**: For critical styles if needed
3. **Check Selectors**: Ensure CSS selectors match your HTML structure

### Animation Problems?
1. **jQuery Version**: Ensure you're using jQuery 1.7+
2. **Conflicting Scripts**: Check for other accordion scripts
3. **CSS Conflicts**: Verify no conflicting transition properties

## 📄 File Structure

```
rank-math-faq-accordion/
├── README.md
├── functions.php
├── screenshots/
│   ├── faq-accordion-demo.png
│   ├── faq-accordion-mobile.png
│   └── faq-accordion-expanded.png
├── LICENSE
└── .gitignore
```

## 🤝 Contributing

1. **Fork the repository**
2. **Create a feature branch** (`git checkout -b feature/amazing-feature`)
3. **Commit your changes** (`git commit -m 'Add amazing feature'`)
4. **Push to the branch** (`git push origin feature/amazing-feature`)
5. **Open a Pull Request**

## 📝 Changelog

### Version 1.0.0
- Initial release
- Smooth slide animations
- Keyboard accessibility
- Responsive design
- Modern styling

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- **Rank Math SEO** for the excellent FAQ block functionality
- **jQuery** for the smooth animation methods
- **WordPress community** for inspiration and best practices

## 📞 Support

If you need help or have questions:

1. **Check the troubleshooting section** above
2. **Search existing issues** on GitHub
3. **Create a new issue** with detailed information
4. **Include screenshots** and error messages

---

**Made with ❤️ for the WordPress community** 
