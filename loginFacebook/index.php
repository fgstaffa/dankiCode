<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password">
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </div><!--form-element-->
        </form><!--form-login-->
        <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="./OBaVg52wtTZ.png" alt="pessoas">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento</h2>
                        <select  name="nascimento-dia" class="nascimento">
                            <option value="dia" selected>Dia</option>
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                        </select>
                        <select class="nascimento" name="nascimento-mes">
                        <option value="mes" selected>Mês</option>
                        <option value="janeiro">Janeiro</option>
                        <option value="fevereiro">Fevereiro</option>
                        <option value="março">Março</option>
                        <option value="abril">Abril</option>
                        <option value="maio">Maio</option>
                        <option value="junho">Junho</option>
                        <option value="julho">Julho</option>
                        <option value="agosto">Agosto</option>
                        <option value="setembro">Setembro</option>
                        <option value="outubro">Outubro</option>
                        <option value="novembro">Novembro</option>
                        <option value="dezembro">Dezembro</option>
                        </select>
                        <select class="nascimento" name="nascimento-ano">
                        <option value="ano" selected>Ano</option>
                        <?php
                                for($i = 1980; $i <= 2020; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                        <input type="radio" value="masculino">
                        <h2>Masculino</h2>
                        </div><!--radio-->
                        <div class="input-radio">
                        <input type="radio" value="feminino">
                        <h2>Feminino</h2>
                        </div><!--radio-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div>

                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->

            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
            <a href="#">Portugues (BR)</a>
        </div><!--center-->
    </section><!--linguas-->
    
</body>
</html>