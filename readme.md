# Visibility / Encapsulation

## Access Level

<table>
<tr>
    <th>Modifier</th>
    <th>Class</th>
    <th>Sub Class</th>
    <th>Global</th>
</tr>
<tr>
    <td>public</td>
    <td>Y</td>
    <td>Y</td>
    <td>Y</td>
</tr>
<tr>
    <td>protected</td>
    <td>Y</td>
    <td>Y</td>
    <td>N</td>
</tr>
<tr>
    <td>private</td>
    <td>Y</td>
    <td>N</td>
    <td>N</td>
</tr>
</table>

<br>
<br>

# Type Check dan Casts

Mengecek tipe dari class menggunakan `instanceof`

example:

```php
if($programmer instanceof BackendProgrammer) {
    echo "Hello BackendProgrammer";
}
```

<br>
<br>

# Getter & Setter

Aturan penulisan getter setter:

<table>
<tr>
    <th>Tipe Data</th>
    <th>Getter Method</th>
    <th>Setter Method</th>
</tr>
<tr>
    <td>Boolean</td>
    <td>isXxx(): bool</td>
    <td>setXxx(bool $value)</td>
</tr>
<tr>
    <td>Lainnya</td>
    <td>getXxx(): tipeData</td>
    <td>setXxx(tipeData $value)</td>
</tr>
</table>
