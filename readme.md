# Table of Contents

## [Visibilty](#visibility--encapsulation)

## [Type Check & Casts](#type-check-dan-casts)

## [Getter Setter](#getter--setter)

## [Anonymous](#anonymous-class)

<br>
<br>

# The Contents

<hr>
<br>
<br>

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

Mengecek tipe dari `class` menggunakan `instanceof`

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

<br>
<br>

# Anonymous Class

Membuat `class` tanpa nama

example:

```php
interface HelloWorld
{
    function sayHello(): void;
}

// class tanpa nama otomatis di instance object
// ke variabel $helloWorld
// kirimkan juga constructnya jika ada
$helloWorld = new class("Ucup") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayHello(): void
    {
        echo "Hello World " . $this->getName() . PHP_EOL;
    }
};
// panggil function sayHello
$helloWorld->sayHello();
```
