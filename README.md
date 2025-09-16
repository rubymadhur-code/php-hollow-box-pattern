# PHP Pattern Programs 🎉

This repository contains **PHP star pattern programs** explained step by step.  
Perfect for **beginners and freshers** preparing for coding interviews.

---

## 📌 Programs Included
- Hollow Box Pattern ✅
- More patterns will be added soon...

---

## 📝 Hollow Box Pattern (Code)

```php
<?php
$rows = 5;  
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>
