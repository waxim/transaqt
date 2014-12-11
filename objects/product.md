# Product Object

```javascript
{

  "hash" : "a9584e89-93ec-4021-ab88-0e9393357187", // UUID4
  "id" : "blue-widget",
  "type" : "regular",
  "name" : "Blue Widget",
  "url_key" : "blue-widget.html",

  "outline" : "This is a blue widget and its __super__ cool.",

  "description" : "Here we could loads of information about {{product.name}} and all its cool features. like its {{product.attribute.colour}} __also I can have markdown__",

  "collection" : ["widgets","blue-things"],

  "prices" : [
    "GBP": { "normal": 12.99, "special": 10.99 },
    "USD": { "normal": 22.00, "special": 15.99 },
    "EUR": { "normal": 14.99, "special": 12.99 },
  ],

  "attributes" : {
    "weight" : "0.2" ,
    "colour" : "blue"
  },

  "media" : [
    {
      "file" : "https://some.site.com/media/files/blue-widget.jpg",
      "label" : "A picture of blue widgets",
      "description" : "nice lovely widgets in all their blue'ness",
      "sort" : 0,
      "usage" : "main"
    },
    {
      "file" : "https://some.site.com/media/files/blue-widget-thumb.jpg",
      "label" : "A picture of blue widget thumbs",
      "description" : "nice lovely widgets in all their blue'ness in thumbs",
      "sort" : 0,
      "usage" : "thumb"
    },
  ],

  "settings" : {
    "enabled" : 1,
    "discoverable" : 1,
    "comments" : 1,
    "ratings" : 1,
    "manage_stock" : 1,
    "taxable" : 1,
  },

  "stock_count" : 19,

}
```
