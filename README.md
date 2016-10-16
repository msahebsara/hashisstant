# hashisstant
A PHP password hashing and verification wrapper.

## Creating a Hash
```
HashHelper::create('password');
```
You may optionally pass in the cost as the second argument:
```
HashHelper::create('password', 12);
```


## Verify a Hash
```
$hash = HashHelper::create('password');
HashHelper::check('password', $hash)
```

