# ElasticMenu

This is a super easy to use elastic menu jquery plugin

## How to use ?

#### 1 - include the .css and .js file

#### 2 - Put the "elastic-menu" class in your list that you wnat to create a ElasticMenu
```html
<ul id="example" class="elastic-menu">
  <li><a href="">Example scope</a></li>
  <li><a href="">Example scope</a></li>
  <li><a href="">Example scope</a></li>
  <li><a href="">Example scope</a></li>
  <li><a href="">Example scope</a></li>
</ul>
```

#### 3 - Set your ID or CLASS element in elasticMenu() plugin
```jQuery
$("#example").elasticMenu();
```

## Settings
```jQuery
$("#example").elasticMenu({
    direction : "horizontal", // default : vertical
    background : "#ec407a", // default : #0d47a1
    color : "white" // default : white
});
```
