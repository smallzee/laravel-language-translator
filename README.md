# 🌍 Smallzee Laravel Language Translator

A flexible and developer-friendly Laravel package for translating text between multiple languages using an external translation API.

---

## ✨ Features

- 🎯 Simple and fluent translation API
- 🌐 Supports multiple languages (e.g., English, Yoruba, Hausa, French, etc.)
- ⚙️ Laravel-ready (6.x – 10.x)
- 🧱 Follows PSR-4 autoloading and Laravel package structure
- 🧩 Easily extendable and customizable

---

## 📦 Installation

Install the package via Composer:

```bash
composer require smallzee/laravel-language-translator

use Smallzee\Translator\Facades\Translator;

// Basic translation
$translated = Translator::translate("Hello", "en", "yo");

// Translate with different language pair
$translated = Translator::translate("Thank you", "en", "yo");

// Automatically uses default from/to languages (if set in config)
$translated = Translator::translate("How are you?");