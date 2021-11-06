           <!-- Free Quote Start -->
            <section class="wide-tb-100 bg-fixed free-quote" style="background-image: url({{ asset(env('THEME').'/images/contact-us.png')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="free-quote-form">
                                <!-- Heading Main -->
                                <h1 class="heading-main mb-4">
                                    <span>Оставить</span> Запрос
                                </h1>
                                <!-- Heading Main -->

                                <!-- Free Quote From -->
                                <form action="#" method="post" novalidate="novalidate" class="col rounded-field">
                                    <div class="form-row mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Имя">
                                    </div>
                                    <!-- <div class="form-row mb-4">
                                    <input type="text" name="email" class="form-control" placeholder="Эл.почта">
                                </div> -->
                                    <div class="form-row mb-4">
                                        <input type="text" name="number" class="form-control"
                                            placeholder="Телефон номер">
                                    </div>
                                    <div class="form-row mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Э-почта">
                                    </div>

                                    <div class="form-row mb-4">
                                        <select title="Please choose a package" required="" name="package"
                                            class="custom-select" aria-required="true" aria-invalid="false">
                                            <option value="">Тип услуги</option>
                                            <option value="Type 1">Перевозка драгоценных грузов</option>
                                            <option value="Type 2">Перевозка требующий особых условий хранения</option>
                                            <option value="Type 3">Перевозка сверхтяжёлые
                                                грузы</option>
                                            <option value="Type 4">Страхование
                                                грузоперевозки</option>
                                        </select>
                                    </div>
                                    <div class="form-row mb-4">
                                        <textarea rows="7" placeholder="Опишите откуда и куда..."
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-row text-center">
                                        <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Отправить<i
                                                class="icofont-rounded-right"></i></button>
                                    </div>
                                </form>
                                <!-- Free Quote From -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Free Quote End -->