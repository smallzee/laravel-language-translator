# 🌍 Smallzee Laravel Language Translator

A flexible and developer-friendly Laravel package that makes translating text between multiple languages simple and efficient. It’s designed to help developers build multilingual applications with ease, ensuring smooth integration and a seamless user experience across different regions and languages. With intuitive methods and clean structure, this package supports effortless language handling for global-ready applications.

---

## ✨ Features

- 🎯 Simple and fluent translation API
- 🌐 Supports multiple languages (e.g., English, Yoruba, Hausa, French, etc.)

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