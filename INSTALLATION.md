# Installation Guide

This guide will walk you through installing the Rank Math FAQ Accordion on your WordPress website.

## Prerequisites

Before you begin, ensure you have:

- ✅ WordPress 5.0 or higher
- ✅ Rank Math SEO Plugin installed and activated
- ✅ A child theme or custom theme with `functions.php` access
- ✅ jQuery (usually included with WordPress)

## Step-by-Step Installation

### Method 1: Child Theme Installation (Recommended)

#### Step 1: Access Your Child Theme
1. **Log in** to your WordPress admin panel
2. **Go to** Appearance → Theme Editor
3. **Select** your child theme from the dropdown
4. **Click** on `functions.php` in the file list

#### Step 2: Add the Code
1. **Scroll to the bottom** of your `functions.php` file
2. **Copy the entire function** from the `functions.php` file in this repository
3. **Paste it** at the end of your child theme's `functions.php`
4. **Click "Update File"** to save

#### Step 3: Test the Installation
1. **Go to** any page with Rank Math FAQ blocks
2. **Check** if the accordion functionality is working
3. **Test** both mouse clicks and keyboard navigation

### Method 2: Custom Plugin File

#### Step 1: Create the Plugin File
1. **Access** your theme directory via FTP or file manager
2. **Create a new file** called `rank-math-accordion.php`
3. **Add this header** at the top of the file:
   ```php
   <?php
   /**
    * Rank Math FAQ Accordion
    * 
    * @package RankMathFAQAccordion
    * @version 1.0.0
    */
   
   // Prevent direct access
   if (!defined('ABSPATH')) {
       exit;
   }
   ```

#### Step 2: Add the Function
1. **Copy the function** from `functions.php` in this repository
2. **Paste it** into your new `rank-math-accordion.php` file
3. **Save the file**

#### Step 3: Include the File
1. **Open** your theme's `functions.php` file
2. **Add this line** at the end:
   ```php
   require_once get_template_directory() . '/rank-math-accordion.php';
   ```
3. **Save the file**

### Method 3: Using a Code Snippets Plugin

#### Step 1: Install Code Snippets
1. **Go to** Plugins → Add New
2. **Search for** "Code Snippets"
3. **Install and activate** the plugin

#### Step 2: Add the Snippet
1. **Go to** Snippets → Add New
2. **Give it a title**: "Rank Math FAQ Accordion"
3. **Copy the function** from `functions.php`
4. **Paste it** into the code area
5. **Set scope** to "Run everywhere"
6. **Save and activate** the snippet

## Verification Steps

After installation, verify everything is working:

### 1. Check Console for Errors
1. **Open** browser developer tools (F12)
2. **Go to** Console tab
3. **Look for** any JavaScript errors
4. **Fix any issues** if found

### 2. Test Functionality
1. **Click** on FAQ questions
2. **Verify** smooth slide animations
3. **Test** arrow rotation
4. **Check** keyboard navigation (Tab, Enter, Space)

### 3. Check Responsive Design
1. **Resize** browser window
2. **Test** on mobile devices
3. **Verify** proper scaling

## Troubleshooting

### Common Issues

#### FAQ Not Working
- **Check jQuery**: Ensure jQuery is loaded
- **Verify selectors**: Confirm FAQ has `rank-math-list` class
- **Clear cache**: Clear any caching plugins
- **Check conflicts**: Disable other plugins temporarily

#### Styling Issues
- **CSS specificity**: Add `!important` if needed
- **Theme conflicts**: Test with default theme
- **Cache issues**: Clear browser and plugin cache

#### Animation Problems
- **jQuery version**: Ensure jQuery 1.7+
- **Conflicting scripts**: Check for other accordion scripts
- **CSS conflicts**: Verify no conflicting transitions

### Debug Steps

1. **Enable WordPress debug**:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```

2. **Check error logs** in `/wp-content/debug.log`

3. **Test with default theme** to isolate issues

4. **Disable plugins** one by one to find conflicts

## Support

If you're still having issues:

1. **Check the troubleshooting section** in the main README
2. **Search existing issues** on GitHub
3. **Create a new issue** with:
   - WordPress version
   - Theme name
   - Plugin list
   - Error messages
   - Screenshots

## Next Steps

After successful installation:

1. **Customize colors** and styling
2. **Adjust animation speed** if needed
3. **Test on different devices**
4. **Consider adding ARIA attributes** for better accessibility

---

**Need help?** Check the main [README.md](README.md) for more information. 
