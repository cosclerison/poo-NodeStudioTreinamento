# Curso PHP POO (Programação orientado a Objeto)

## Canal Node Studio Treinamentos
   https://www.youtube.com/watch?v=hzy_P_H-1CQ&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=1

## Iniciar o Servidor PHP CLI
    $ php -S 127.0.0.1:8000

## Direcionando a pasta da Aula 
    $ php -S 127.0.0.1:8000/Aula-(Numero da aula)

# LISTA DAS AULAS

## 01 - Introdução (CONCLUÍDO)
    A introdução apresenta os conceitos básicos da programação orientada a objetos (POO), que é um paradigma de programação baseado na criação de "objetos". Estes objetos são instâncias de "classes", que podem conter dados (atributos) e funções (métodos). A POO facilita a organização e estruturação do código, tornando-o mais modular, reutilizável e fácil de manter. Os principais pilares da POO são encapsulamento, herança, abstração e polimorfismo.

## 02 - Classes, Atributos e Métodos (CONCLUÍDO)
    Classes são moldes ou modelos para criar objetos. Uma classe define um conjunto de atributos (variáveis) e métodos (funções) que representam o comportamento e as características dos objetos criados a partir dela. Por exemplo, uma classe "Carro" pode ter atributos como "cor", "marca" e "modelo", e métodos como "acelerar" e "frear".

## 03 - Getters and Setters (CONCLUÍDO)
    Getters e setters são métodos utilizados para acessar e modificar os atributos de uma classe de forma controlada. Os getters permitem obter o valor de um atributo, enquanto os setters permitem modificar o valor de um atributo. Eles são úteis para implementar encapsulamento, permitindo validações e controle sobre como os atributos são acessados e alterados.

## 04 - Construtor (CONCLUÍDO)
    O construtor é um método especial de uma classe que é chamado automaticamente quando um novo objeto é criado. Ele é usado para inicializar os atributos do objeto. Em Python, o construtor é definido pelo método __init__(). Por exemplo, def __init__(self, cor, marca, modelo): inicializa um objeto "Carro" com atributos específicos.

## 05 - Herança (CONCLUÍDO)
    Herança é um mecanismo que permite criar uma nova classe com base em uma classe existente. A nova classe (subclasse) herda os atributos e métodos da classe existente (superclasse), podendo adicionar novos atributos e métodos ou modificar os existentes. Isso promove a reutilização de código e a criação de hierarquias de classes. Por exemplo, uma classe "Veículo" pode ser a superclasse de "Carro" e "Moto".

## 06 - Modificadores de Acesso 01 (CONCLUÍDO)
    Modificadores de acesso controlam a visibilidade e a acessibilidade dos atributos e métodos de uma classe. Em Python, os modificadores de acesso são implementados por convenção: um atributo ou método com um único sublinhado (_) é considerado protegido e com dois sublinhados (__) é considerado privado. Atributos e métodos públicos não têm sublinhado.

## 07 - Modificadores de Acesso 02 (CONCLUÍDO)
    Os modificadores de acesso continuam sendo detalhados, explicando que atributos e métodos privados (__nome) são acessíveis apenas dentro da própria classe, enquanto os protegidos (_nome) são acessíveis dentro da classe e nas subclasses. É uma convenção para indicar o nível de acesso esperado e não uma restrição absoluta como em outras linguagens de programação.

## 08 - Abstração (CONCLUÍDO)
    Abstração é o processo de simplificar um sistema complexo, destacando apenas os aspectos essenciais e ignorando os detalhes desnecessários. Em POO, abstração é implementada através de classes abstratas e interfaces. Uma classe abstrata pode conter métodos abstratos (sem implementação) que devem ser implementados pelas subclasses, garantindo um contrato de comportamento.

## 09 - Constantes, Self e Parent (CONCLUÍDO)
    Constantes são valores imutáveis definidos dentro de uma classe e geralmente são escritas em letras maiúsculas. self é uma referência ao próprio objeto e é usado para acessar os atributos e métodos da classe. parent se refere à superclasse de uma classe, permitindo chamar métodos e acessar atributos da superclasse.

## 10 - Métodos e Atributos Estáticos (CONCLUÍDO)
    Métodos e atributos estáticos pertencem à classe em si, e não a instâncias individuais da classe. São definidos usando o decorador @staticmethod para métodos ou simplesmente declarados no corpo da classe para atributos. Eles podem ser acessados diretamente pela classe sem a necessidade de criar um objeto. Úteis para utilitários ou valores constantes compartilhados.

## 11 - Polimorfismo (CONCLUÍDO)
    Polimorfismo é a capacidade de objetos de diferentes classes serem tratados de forma intercambiável através de uma interface comum. Isso permite que métodos com o mesmo nome em diferentes classes executem ações diferentes, dependendo do objeto que os invoca. Polimorfismo promove flexibilidade e a reutilização de código, facilitando a extensão e manutenção do sistema.

## 12 - Interfaces (CONCLUÍDO)
    Interfaces são contratos que especificam um conjunto de métodos que uma classe deve implementar, sem fornecer a implementação desses métodos. Em linguagens como Java, interfaces são uma parte formal da linguagem.

    As interfaces são usadas para garantir que diferentes classes tenham uma estrutura comum, promovendo a interoperabilidade e a consistência entre diferentes partes de um sistema. Uma interface define os   métodos que devem ser implementados pelas classes que a utilizam, garantindo que essas classes compartilhem um comportamento comum.

## 13 - Namespaces (CONCLUÍDO)
    Namespaces (ou espaços de nomes) são um conceito fundamental em PHP e muitas outras linguagens de programação. Eles fornecem um escopo para os identificadores (nomes de classes, funções, constantes, etc.) e ajudam a organizar e evitar conflitos de nomes. Namespaces permitem que desenvolvedores organizem o código de forma modular e evitem colisões de nomes, especialmente em projetos grandes ou quando usando bibliotecas de terceiros.

    Utilizando Namespaces em PHP
    Em PHP, namespaces são declarados usando a palavra-chave namespace no início do arquivo, antes de qualquer outra instrução que não seja um declare.

## 14 - (CONCLUÍDO)


