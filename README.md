# solid-php

## PHP SOLID
### Princípios ágeis

**Sintomas de um código doente**
- Ausência de testes ou pouca cobertura
- Classes grandes
- Complexo de mais (Complexidade Ciclomática)
- Falta de padrão de escrita
- Não ser SOLIDO

**A Sigla**
- Single Responsability - Atores e estruturas de alto nível
- Open/Close Principle (OCP) - Projeto de classes e extensão de funcionalidades
- Liskov Substituition - Subtipos e herança
- Interface Segregation - Lógica de negócios relacionada a comunicação com classes cliente
- Dependency Inversion - Dependencias das classes

**Single responsability**
- Responsabilidade única
- Um objeto jamais deve ter mais de um fim ou proposito.
- Ex: Um objeto não deve armazenar registros e imprimir o resultado ou salvar estes dados.

**Open/Closed**
- Aberto para expansão, fechado para modificação
- Uma classe não deve depender de outra! As possíveis soluções:
- - Usar interfaces e Classes abstratas para definir um tipo
- - Padrão de projeto Strategy (Interface)
- - Padrão de projeto Template Method (Abstract)

**Liskov Substituition**
- Subtipos devem ser substituíveis pelos seus tipos base. (Barbara Liskov)
- Ex: Um quadrado é um tipo de retângulo, mas não pode ser substituído pelo retângulo, ele quebra o princípio de Liskov.

**Interface Segregation**
- Nenhum cliente deve ser forçado a depender de métodos que ele não use.
- Podemos e devemos criar interfaces menores e mais simples, mesmo que com métodos duplicados.

**Dependency Inversion**
- Módulos de alto nível não deveriam depender de módulos de baixo nível. Ambos deveriam depender de abstrações.
- Abstrações não deveriam depender de detalhes. Detalhes devem depender de abstrações.


