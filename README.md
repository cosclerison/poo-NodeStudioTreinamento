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

## 14 - Referência e Clonagem de Objetos (CONCLUÍDO)
    Em PHP, entender a diferença entre referência e clonagem de objetos é crucial para gerenciar como os objetos são manipulados na memória. Isso pode afetar o comportamento e o desempenho de suas aplicações.

    Referência de Objetos
    Em PHP, quando você atribui um objeto a uma variável ou passa um objeto para uma função, você está manipulando uma referência para o objeto, e não uma cópia dele. Isso significa que qualquer alteração feita no objeto através de uma variável afetará todas as outras variáveis que referenciam o mesmo objeto.

## 15 - Tratamento de Exceções (CONCLUÍDO)
    O tratamento de exceções em PHP é uma técnica utilizada para gerenciar erros e condições excepcionais de forma controlada. Em vez de interromper a execução do script, as exceções permitem que o programa capture e lide com esses problemas, oferecendo uma maneira estruturada de gerenciar erros.

    - Conceitos Básicos
    Exceção: É um evento anômalo que pode ocorrer durante a execução de um programa e que interrompe o fluxo normal de execução. Em PHP, exceções são objetos que herdam da classe Exception.
    
    Try-Catch: Estrutura que permite capturar e tratar exceções. O código que pode lançar uma exceção é colocado dentro do bloco try, e o bloco catch contém o código que deve ser executado se uma exceção for lançada.
    
    Throw: Utilizado para lançar uma exceção manualmente.

## 16 - Relação entre os objetos (Associação) (CONCLUÍDO)
    A associação é um dos tipos de relacionamento entre objetos em programação orientada a objetos (OOP). Ela descreve como os objetos interagem uns com os outros e pode ser classificada em diferentes tipos, dependendo da natureza do relacionamento. Em PHP, a associação é implementada através da criação de instâncias de classes dentro de outras classes.

    Tipos de Associação
    Associação Simples (Associação):
    É um relacionamento onde um objeto é ligado a outro, mas ambos têm ciclos de vida independentes. Por exemplo, um "Cliente" pode estar associado a um "Endereço".

## 17 - Relação entre os objetos (Agregação) (CONCLUÍDO)
    A agregação é um dos tipos de relacionamento entre objetos em programação orientada a objetos (OOP). Ela descreve um relacionamento onde um objeto é composto por outros objetos, mas esses objetos componentes podem existir independentemente do objeto composto. Em PHP, a agregação é implementada criando instâncias de classes dentro de outras classes, onde os componentes agregados não dependem exclusivamente do ciclo de vida do objeto que os contém.

    Características da Agregação
    Composição Fraca: Diferente da composição, na agregação os objetos podem existir independentemente do objeto agregado.

    Relação de Parte-Todo: Um objeto (o todo) é composto por outros objetos (as partes).
    Independência: As partes podem existir fora do todo e podem ser compartilhadas com outros objetos.
    Exemplo de Agregação em PHP
    Cenário: Departamento e Funcionários
    Vamos considerar um cenário onde um departamento pode ter vários funcionários, mas os funcionários podem existir independentemente do departamento. Esse é um exemplo clássico de agregação.

## 18 - Relação entre os objetos (Composição) (CONCLUÍDO)
    A composição é um tipo de relacionamento entre objetos em programação orientada a objetos (OOP) onde um objeto é composto por outros objetos, mas, ao contrário da agregação, os objetos componentes não podem existir independentemente do objeto composto. Em PHP, a composição é implementada criando instâncias de classes dentro de outras classes, onde os componentes fazem parte do ciclo de vida do objeto que os contém.

    Características da Composição
    Composição Forte: Os objetos componentes não podem existir sem o objeto composto.
    Relação de Parte-Todo: Um objeto (o todo) é composto por outros objetos (as partes) que são destruídos junto com ele.
    Dependência: As partes dependem completamente do ciclo de vida do todo.
    Exemplo de Composição em PHP
    Cenário: Carro e Componentes (Motor, Rodas)
    Vamos considerar um cenário onde um carro é composto por um motor e várias rodas. Esses componentes não têm significado fora do contexto do carro e são destruídos junto com o carro.

## 19 - Métodos Mágicos (CONCLUÍDO)
    Métodos mágicos em PHP são métodos especiais que têm um comportamento predefinido associado a eles. Eles são chamados automaticamente em determinadas situações, dependendo do contexto no qual são usados. Esses métodos têm dois sublinhados duplos (__) como prefixo em seus nomes. Eles fornecem uma maneira conveniente de definir comportamentos personalizados para operações comuns em objetos, como acesso a propriedades, chamadas de métodos inexistentes, serializado e assim por diante.

    Aqui estão alguns dos métodos mágicos mais comumente usados em PHP:

    __construct(): Este método é chamado automaticamente quando um objeto é instanciado. É usado para inicializar o objeto e configurar seu estado inicial.

    __destruct(): É chamado automaticamente quando um objeto é destruído ou quando o script termina. É usado para liberar recursos ou executar tarefas de limpeza.

    __get($propriedade): Chamado automaticamente quando o código tenta acessar uma propriedade inacessível ou não existente de um objeto. É útil para criar propriedades virtuais ou para implementar lógica personalizada de acesso.

    __set($propriedade, $valor): Chamado automaticamente quando o código tenta definir o valor de uma propriedade inacessível ou não existente de um objeto. É útil para validar ou modificar valores atribuídos a propriedades.

    __call($método, $argumentos): Invocado automaticamente quando o código tenta chamar um método inacessível ou não existente de um objeto. É útil para implementar lógica personalizada de chamada de método ou para encaminhar chamadas de método para outros objetos.

    __toString(): Chamado automaticamente quando um objeto é convertido em uma string, geralmente usando a função echo ou print. É usado para controlar como o objeto é representado como uma string.

    __clone(): Invocado automaticamente quando um objeto é clonado usando a palavra-chave clone. É usado para realizar inicializações ou configurações especiais após a clonagem do objeto.

    Esses são apenas alguns exemplos dos muitos métodos mágicos disponíveis em PHP. Eles permitem uma flexibilidade significativa no comportamento dos objetos e são amplamente utilizados em programação orientada a objetos em PHP.

## 20 - Composer (CONCLUÍDO)
    Composer é uma ferramenta de gerenciamento de dependências para PHP, projetada para facilitar a instalação e o gerenciamento de bibliotecas de terceiros em projetos PHP. Ele resolve muitos problemas comuns relacionados ao gerenciamento de dependências, como instalação, atualização, autoloading e resolução de conflitos de versão.

    Funcionalidades Principais  
    Gerenciamento de Dependências: Composer permite declarar as dependências do seu projeto em um arquivo composer  .json. Ele resolve automaticamente as dependências e instala as bibliotecas necessárias.

    Autoloading: Composer gera automaticamente um autoloader PSR-4 para carregar classes automaticamente conforme   necessário, evitando a necessidade de incluir manualmente arquivos de classes.

    Atualização de Dependências: Composer permite atualizar facilmente todas as bibliotecas instaladas para suas v  ersões mais recentes compatíveis.

    Instalação Global: Composer pode ser instalado globalmente no sistema, permitindo que seja usado em vários pro  jetos sem a necessidade de instalação repetida.

    Resolução de Conflitos: Se houver conflitos de versão entre diferentes bibliotecas, Composer tentará resolvê-l  os instalando versões compatíveis de todas as dependências.

    Uso Básico  
    Instalação: Para instalar o Composer globalmente, basta baixar e executar o script de instalação fornecido no   site oficial. Depois, você pode usar o comando composer em qualquer lugar no seu sistema.

    Criação do Arquivo composer.json: No diretório raiz do seu projeto, crie um arquivo composer.json e defina as   dependências do seu projeto.

    Instalação de Dependências: Execute composer install para instalar todas as dependências definidas no arquivo   composer.json.

    Autoloading: Use o autoloader gerado pelo Composer para carregar automaticamente as classes necessárias no seu   projeto.

    Atualização de Dependências: Execute composer update para atualizar todas as bibliotecas instaladas para suas   versões mais recentes compatíveis.

## 21 - (CONCLUÍDO)
## 22 - (CONCLUÍDO)
## 23 - (CONCLUÍDO)
## 24 - (CONCLUÍDO)
## 25 - (CONCLUÍDO)
## 26 - (CONCLUÍDO)
## 27 - (CONCLUÍDO)