<section class="sectionformulario">

    <div id="contenedorpadre">
        <h1 class="titulo_formulario">¿Quiéres recibir más información? Nosotros te llamamos.</h1>
        <div id="divintroformu">
                <p id="introducionformu">Cuéntanos en que estas interesado, si tienens alguna duda o problema y te pondremos en contacto con la persona adecuada.</p>
        </div>
        <div class="divimagen">
                <img src="{{asset('img/form/windsurf.jpg')}}" alt="" />
        </div>
        <div id="contenedorformu">
                <form>
                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                <input name="nombre"  value="name" />
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input 
                                name="email"  value="email" />
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label" >Telefono movil</label>
                                <input name="telefono"   value="telefono"/>
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Cuentanos porque estas interesado</label>
                                <textarea 
                                class="form-control" 
                                id="exampleFormControlTextarea1" 
                                 rows="3"></textarea>
                        </div>
                        <div>
                                <input type="submit" value="Enviar" />
                        </div>
                </form>
        </div>
        <div class="divimagen">
                <img src="{{asset('img/form/sky.jpg')}}" alt="" />
        </div>
    </div>

</section>