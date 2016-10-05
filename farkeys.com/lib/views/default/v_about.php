<?php
/**
* @author Dmitry Porozhnyakov
*/
?>
<?require_once( __DIR__.'/head.php' );?>

    <title><?=$data::$second_service_name;?> - О сервисе</title>
<?require_once( __DIR__.'/header_secondary_pages.php' );?>

        <div id="cntnt">
            <div class="page secondary">
                <div class="page-header">
                    <div class="page-header-content">
                        <h1>О сервисе<small class="upper"></small></h1>
                        <a href="<?=$data::$links['home'];?>" class="back-button big page-back"></a>
                    </div>
                </div>
                <div class="page-region">
                    <div class="page-region-content">
                        <div class="grid no-margin">
                            <div class="row">
                                <div class="span10">
                                    <p class="indent text-justify">
                                        Сервис FARKeys предоставляет пользователям возможность альтернативного, более безопасного и простого способа авторизации на сайтах глобальной сети Интернет.
                                    </p>
                                    <p class="indent text-justify">
                                        Всем известно, что использование паролей является на данный момент наиболее популярным способом идентификации на сайтах, но мало кто задумывается, что использование статического ( долго не изменяемого ) пароля значительно снижает безопасность аккаунта пользователя.
                                    </p>
                                    <p class="indent text-justify">
                                        Предположим, что пользователь зарегистрирован на десяти различных интернет-порталах. В таком случае ему необходимо запомнить десять различных пар «Логин» - «Пароль». Но как показывает практика, большинство пользователей будут иметь один и тот же пароль на всех сайтах, что снизит безопасность как самого пользователя, так и всех, иcпользуемых им, сервисов. 
                                    </p>
                                    <p class="indent text-justify">
                                        Также безопасность пароля уменьшается в прямой зависимости с длительностью его использования. То есть, чем дольше пароль используется, тем он менее безопасен.
                                    </p>
                                    <p class="indent text-justify">
                                        На текущий момент существуют сервисы, позволяющие безопасно хранить пароли  в зашифрованной базе данных, что позволяет иметь разные пароли на сайтах без необходимости их запоминания. Но в таком случае не решается проблема, связанная с длительностью использования однообразных паролей. Очевидно, что вручную менять множество паролей совершенно неудобно.
                                    </p>
                                    <p class="indent text-justify">
                                        Чтобы решить указанные проблемы ( долговременность использования и однообразие паролей ) и снизить риск взлома аккакунта пользователя, был создан сервис FARKeys ( Fast And Random Keys - кратковременные одноразовые пароли ). 
                                    </p>
                                    <p class="indent text-justify">
                                        Проект FARKeys является связующим звеном между пользователями и сайтами-партнёрами, что позволяет снизить количество идентификационных данных, необходимых для процессов авторизации.
                                    </p>
                                    <div class="text-center">
                                        <a href="/media/img/FARKeys.com.png" title=""><img src="/media/img/FARKeys.com.png" width="700" height="278" /></a>
                                    </div>
                                    <p class="indent text-justify">
                                        Чтобы пользователь мог проходить авторизацию на сайтах-партнёрах, ему необходимо:
                                    </p>
                                    <p class="indent text-justify">
                                        Вначале, скачать себе на мобильный телефон специальное приложение. Затем, ввести в него так называемый код активации, полученный в процессе регистрации и необходимый для персонализации мобильного приложения. После этого пользователь может «привязывать» свои аккаунты на различных сайтах, ставших партнёрами сервиса FARKeys, к своему аккаунту в системе. 
                                    </p>
                                    <p class="indent text-justify">
                                        Когда пользователь «привязал» все необходимые аккаунты, он может осуществлять безопасный вход в любой из них по системе вопрос-ответ. То есть, для прохождения процедуры идентификации ему необходимо указать свой e-mail адрес в системе FARKeys, в соответствии с которым ему будет предложено <ins>уникальное</ins> и <ins>неповторяющееся</ins> число-вопрос. В свою очередь, пользователь должен ввести число-ответ, сгенерированное мобильным приложением на основе числа-вопроса.
                                    </p>
                                    <p class="indent text-justify">
                                        В случае совпадения введённого и рассчитанного сервисом числа-ответа пользователь считается успешно идентифицированным.
                                    </p>
                                    <p class="indent text-justify">
                                        Таким образом использование сервиса FARKeys позволяет не запоминать пароли, а генерировать их динамически для каждого сеанса авторизации. Это повышает безопасность и удобство авторизации. Также следует заметить, что сервис FARKeys дополняет существующие способы авторизации, но не отменяет необходимость регистрации на сайте сервис-партнёра и установки основного пароля.
                                    </p>
                                    <p class="indent text-justify">
                                        Более подробная информация:
                                    </p>
                                    <p class="indent text-justify">
                                        <a href="<?=$data::$links['for_users'];?>" class="fg-color-red">- для пользователей</a>
                                    </p>
                                    <p class="indent text-justify">
                                        <a href="<?=$data::$links['for_partners'];?>" class="fg-color-blueDark">- для сервис-партнёров</a>
                                    </p>
                                    <h2>Контакты для связи</h2>
                                    <p class="indent text-justify">
                                        Если у Вас есть какие-либо вопросы или пожелания, мы будем рады их выслушать и в случае необходимости помочь. Для связи с нами Вы можете использовать любой из способов, представленных на странице <a href="<?=$data::$links['contacts'];?>" class="fg-color-purple">контактов</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?require_once( __DIR__.'/footer_secondary_pages.php' );?>