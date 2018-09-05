# Convert Multidimensional array in a single array
Multi-dimensional array (array in array situation) to be converted in a single dimensional array.

**This is how my array is currently**


```
Array
(
  [0] => Array
    (
      [0] => Array
          (
              [plan] => basic
          )
      [1] => Array
          (
              [plan] => small
          )
      [2] => Array
          (
              [plan] => novice
          )
    )
 )
```

**Now, It's simply down to this**

```
Array (
  [0] => basic
  [1] => small
  [2] => novice
)
```
