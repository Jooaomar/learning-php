### O Básico de Regex (Expressões Regulares) 🚀

**Regex** (Regular Expressions) é uma forma de descrever padrões para buscar, substituir ou validar strings. Apesar de ser usada em várias linguagens, a sintaxe básica é a mesma.

---

### **1. Componentes Fundamentais**

#### **Literais**
- Texto que corresponde exatamente ao que foi escrito.
  - Exemplo: `cat` corresponde apenas a `"cat"`.

#### **Metacaracteres**
- Caracteres especiais que possuem significados diferentes. Se você quiser usá-los como literais, deve "escapá-los" com uma barra invertida `\`.
  - Exemplos: `.` `*` `+` `?` `^` `$` `[]` `{}` `()` `|`

#### **Modificadores Comuns**
- Afetam como o regex é aplicado.
  - `i`: Case-insensitive (ignora maiúsculas/minúsculas).
  - `g`: Global (encontra todas as correspondências, não apenas a primeira).
  - `m`: Multiline (trata strings com várias linhas).

---

### **2. Classes de Caracteres**

#### **Padrões Básicos**
- `.`: Qualquer caractere (exceto nova linha).
- `\w`: Qualquer caractere alfanumérico (a-z, A-Z, 0-9, e `_`).
- `\d`: Qualquer dígito (0-9).
- `\s`: Qualquer espaço em branco (espaço, tab, nova linha).
- Exemplos:
  ```regex
  \d\d\d  // Encontra 3 dígitos seguidos, como "123"
  ```

#### **Negação**
- `\W`: Qualquer caractere NÃO alfanumérico.
- `\D`: Qualquer caractere que NÃO seja dígito.
- `\S`: Qualquer caractere que NÃO seja espaço.

---

### **3. Âncoras**
- Marcam o início ou fim de uma string.
  - `^`: Início da string.
  - `$`: Fim da string.
  - Exemplos:
    ```regex
    ^cat   // "cat" no início da string.
    dog$   // "dog" no final da string.
    ```

---

### **4. Grupos e Alternativas**

#### **Agrupamento**
- `()`: Agrupa partes do regex para serem tratadas como uma unidade.
  - Exemplo:
    ```regex
    (cat|dog)  // Encontra "cat" ou "dog".
    ```

#### **Captura**
- `()` também captura a parte correspondente para ser usada depois (substituições ou análises).
- Exemplo:
  ```regex
  (John|Jane) (Doe)  // Captura "John Doe" ou "Jane Doe".
  ```

---

### **5. Quantificadores**
- Especificam o número de vezes que algo pode ocorrer.
  - `*`: Zero ou mais vezes.
  - `+`: Uma ou mais vezes.
  - `?`: Zero ou uma vez (opcional).
  - `{n}`: Exatamente `n` vezes.
  - `{n,}`: Pelo menos `n` vezes.
  - `{n,m}`: Entre `n` e `m` vezes.
  - Exemplos:
    ```regex
    \d+     // Um ou mais dígitos.
    a{2,4}  // "a" repetido de 2 a 4 vezes.
    ```

---

### **6. Classes Personalizadas**
- `[ ]`: Define um conjunto de caracteres permitidos.
  - `[aeiou]`: Qualquer vogal.
  - `[a-z]`: Qualquer letra minúscula de a a z.
  - `[^0-9]`: Qualquer caractere que NÃO seja um número.
  - Exemplos:
    ```regex
    [a-zA-Z]  // Qualquer letra.
    ```

---

### **7. Escape de Caracteres**
- Para usar metacaracteres literalmente, escape com `\`.
  - Exemplos:
    ```regex
    \.     // Literalmente um ponto.
    \\     // Literalmente uma barra invertida.
    ```

---

### **8. Exemplo de Combinações**

#### Validar email simples:
```regex
^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$
```

#### Extrair números de uma string:
```regex
\d+
```

#### Validar CEP (Brasil, formato: 00000-000):
```regex
^\d{5}-\d{3}$
```

#### Substituir múltiplos espaços por um único espaço:
```regex
\s+  // Substituir por " "
```

---

### **9. Testar Regex**
Use ferramentas como:
- [regex101.com](https://regex101.com)
- [regexr.com](https://regexr.com)

Elas explicam os padrões e ajudam a testar e depurar.

---

Quer exemplos práticos com uma linguagem específica? 😊