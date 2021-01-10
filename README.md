# Live Visitor Counter

A simple WordPress plugin that shows a live visitor counter on posts and pages.

## Description

This plugin displays a small floating box showing how many users are currently viewing the page. The number updates automatically every few seconds to create a sense of real-time activity.

## Features

- Live visitor counter display
- Auto updates every 5 seconds
- Works on single posts/pages
- Lightweight and fast
- Simple design

## Installation

1. Upload the plugin folder to:
   ```
   wp-content/plugins/
   ```
2. Activate the plugin from WordPress admin
3. Open any post or page to see it in action

## How it works

The plugin generates a random number and updates it periodically using JavaScript to simulate live visitors.

## File Structure

```
live-visitor-counter/
│
├── live-visitor-counter.php
├── assets/
│   ├── js/lvc.js
│   └── css/lvc.css
```

## Author

Zohaib Hassan