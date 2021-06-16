        <section class="container mb-5">
            <div class="row justify-content-center bg-danger text-white p-2 mb-5">
                <h1 class="py-1 my-auto">CONTACTO</h1>
            </div>
            <div class="row justify-content-around w-75 mx-auto mt-3">
                <button class="btn btn-secondary redes col-2 py-3 shadow" data-toggle="modal"
                        data-target="#alumno"><i class="fas fa-user-alt"></i>
                </button>
                <div class="modal fade" id="alumno" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-danger">
                                <h5 class="modal-title">Datos del alumno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <figure><img src="./media/Alumno.jpg" alt="Alumno Alan Maximiliano Godoy"></figure>
                                <p><strong>Alumno:</strong> Alan Maximiliano Godoy</p>
                                <p><strong>Email:</strong> alan.godoy@davinci.edu.ar</p>
                                <p><strong>Carrera:</strong> Diseño & Desarrollo Web</p>
                                <p><strong>Materia:</strong> Programación II</p>
                                <p><strong>Comisión</strong> Turno noche A</p>
                            </div>
                            <div class="modal-footer border-top border-danger">
                                <button type="button" class="btn btn-primary mx-auto"
                                        data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://www.instagram.com/?hl=es-la" target="_blank"
                   class="btn redes col-2 py-3 shadow btn-light"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/" target="_blank" class="btn redes col-2 py-3 shadow btn-light"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/" target="_blank" class="btn redes col-2 py-3 shadow btn-light"><i
                        class="fab fa-youtube"></i></a>
            </div>
        </section>
        <section class="container w-75">
            <div class="border border-light mb-4">
                <form class="text-center" action="index.php?s=gracias" method="post"
                      enctype="multipart/form-data">

                    <h4 class="mb-4">ENVIÁ TU CONSULTA</h4>

                    <label for="nombre-id"></label>
                    <input type="text" id="nombre-id" class="form-control mb-2" placeholder="Nombre" required>


                    <label for="email-id"></label>
                    <input type="email" id="email-id" class="form-control mb-2" placeholder="E-mail" required>


                    <label for="telefono-id"></label>
                    <input type="tel" id="telefono-id" class="form-control mb-2" placeholder="Teléfono" required>

                    <label for="motivo-id" class="label-texto">ASUNTO</label>
                    <select id="motivo-id" class="browser-default custom-select mb-3" required>
                        <option value="">Asunto</option>
                        <option value="1">Compras</option>
                        <option value="2">Envíos</option>
                        <option value="3">Promociones</option>
                        <option value="4">Información</option>
                    </select>

                    <div class="form-group">
                        <label for="descripcion-id"></label>
                        <textarea id="descripcion-id" class="form-control rounded-0" rows="3" placeholder="Consulta" required></textarea>

                    </div>

                    <button class="btn btn-info btn-block" type="submit">Enviar</button>

                </form>
            </div>
        </section>