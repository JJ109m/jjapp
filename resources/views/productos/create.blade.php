@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <div class="contents">
            <form method="post" action="{{ route('productos.store') }}" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-lg-8 mb-3 mb-lg-0">
                            <div class="card mb-3 mb-lg-5">
                                <div class="card-header">
                                    <h4 class="card-header-title">Product information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <label for="nombre" class="form-label">Name
                                            <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                aria-label="Products are the goods or services you sell."
                                                data-bs-original-title="Products are the goods or services you sell."></i>
                                        </label>

                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            placeholder="Articulo..." aria-label="Articulo..." required>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">sku</label>

                                                <input type="text" class="form-control" name="sku" id="sku" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="weight" class="form-label">Peso</label>

                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="weight" id="weight"
                                                        placeholder="0.0" aria-label="0.0" required>

                                                    <div class="input-group-append">
                                                        <div class="tom-select-custom tom-select-custom-end">
                                                            <select
                                                                class="js-select form-select tomselected ts-hidden-accessible"
                                                                autocomplete="off" id="tomselect-1" tabindex="-1"
                                                                name="weight_unit">
                                                                <option value="lb">lb</option>
                                                                <option value="oz">oz</option>

                                                                <option value="g">g</option>
                                                                <option value="kg" selected="">kg</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <small class="form-text">Calcular el peso del Producto.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="descripcion" class="form-label">Description <span
                                            class="form-label-secondary">(Optional)</span></label>
                                    <textarea name="descripcion" id="descripcion" class="ckeditor" rows="10" cols="80" required></textarea>
                                </div>
                            </div>
                            <div class="card card-default card-md mb-4">
                                <div class="card-body">
                                    <label for="dropzone" class="file-upload__label">
                                        <div class="upload-product-img px-10 d-block">
                                            <div id="dropzone">

                                                <span class="dropzone-text">Arrastra y suelta las imágenes aquí</span>
                                                <input type="file" id="imagenes" name="imagenes[]" accept="image/*"
                                                    multiple />
                                                <div id="preview-container" class="preview-container"></div>
                                                <div id="toast-container" class="toast-container"></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <button type="button" class="btn btn-primary" id="nueva-variante-button">Nueva
                                            Variante</button>
                                        <div class="col-12">
                                            <div id="formulario-container" style="display: none;">
                                                <div class="row g-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 mb-25 col-md-12">
                                                                    <div class="row mb-4">
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control"
                                                                                id="nombre-variante"
                                                                                placeholder="Nombre variante">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <input id="variedades" class="form-control"
                                                                                placeholder="Variedades">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-primary" type="button"
                                                                            onclick="submitForm()">Submit form
                                                                        </button>
                                                                        <button type="button"
                                                                            class="btn btn-danger cancel-button"
                                                                            onclick="cancelForm()">Cancelar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div id="tarjetas-container"></div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Imagen</th>
                                                        <th>Combinación</th>
                                                        <th>Precio actual</th>
                                                        <th>Stock</th>
                                                        <th>En existencias</th>
                                                        <th>SKU</th>
                                                        <th>Peso</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider" id="combinations-table"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-25 col-md-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h4 class="card-header-title">Contabilidad</h4>
                                </div>
                                <div class="card-body">

                                    <div class="mb-4">
                                        <label class="row form-label form-switch" for="disponibilidadSwitch1">
                                            <span class="col-8 col-sm-9 ms-0">
                                                <span>Disponibilidad
                                                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        aria-label="Product disponibilidad switch toggler."
                                                        data-bs-original-title="Product disponibilidad switch toggler."></i></span>
                                            </span>
                                            <span class="col-4 col-sm-3">
                                                <input type="checkbox" class="form-check-input float-end"
                                                    id="Disponibilidad" onchange="actualizarEstado()">
                                                <!-- Agregamos un campo oculto para almacenar el estado -->
                                                <input type="hidden" id="disponibilidadHidden" name="disponibilidad">
                                            </span>
                                        </label>
                                    </div>

                                    <script>
                                        function actualizarEstado() {
                                            // Obtener el estado del interruptor
                                            var isChecked = document.getElementById('Disponibilidad').checked;

                                            // Actualizar el campo oculto con el estado del interruptor
                                            document.getElementById('disponibilidadHidden').value = isChecked ? 'Disponible' : 'No Disponible';
                                        }
                                    </script>

                                    <hr class="my-4">

                                    <div class="mb-4">
                                        <label for="precio" class="form-label">Precio de Compra</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="precio" id="precio"
                                                placeholder="0.00" aria-label="0.00"
                                                oninput="convertirMonetario('precio', this)" required>
                                        </div>
                                    </div>

                                    <!-- Agrega un campo oculto para enviar el valor sin comas al servidor -->
                                    <input type="hidden" name="precio_sin_comas" id="precio_sin_comas">

                                    <script>
                                        function validarFormulario() {
                                            // Verificar si el campo 'precio' no está vacío antes de enviar el formulario
                                            var precio = document.getElementById('precio_sin_comas').value;
                                            if (!precio) {
                                                alert('El campo precio no puede estar vacío');
                                                return false; // Evitar el envío del formulario
                                            }
                                            return true; // Continuar con el envío del formulario
                                        }

                                        // Agrega un evento al formulario para validar antes de enviarlo
                                        document.getElementById('tuFormulario').addEventListener('submit', validarFormulario);
                                    </script>

                                    <div class="mb-4">
                                        <label for="costo" class="form-label">Costo de Articulo</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="costo" id="costo"
                                                placeholder="0.00" aria-label="0.00"
                                                oninput="convertirMonetario('costo', this)" required>
                                        </div>
                                    </div>

                                    <!-- Agrega un campo oculto para enviar el valor sin comas al servidor -->
                                    <input type="hidden" name="costo_sin_comas" id="costo_sin_comas">

                                    <script>
                                        function validarFormulario() {
                                            // Verificar si el campo 'costo' no está vacío antes de enviar el formulario
                                            var costo = document.getElementById('costo_sin_comas').value;
                                            if (!costo) {
                                                alert('El campo costo no puede estar vacío');
                                                return false; // Evitar el envío del formulario
                                            }
                                            return true; // Continuar con el envío del formulario
                                        }

                                        // Agrega un evento al formulario para validar antes de enviarlo
                                        document.getElementById('tuFormulario').addEventListener('submit', validarFormulario);
                                    </script>

                                    <script>
                                        function convertirMonetario(id, inputElement) {
                                            // Obtener el valor actual del input
                                            var inputValue = inputElement.value;

                                            // Quitar comas y espacios para asegurar un número válido
                                            var numeroSinComas = inputValue.replace(/,/g, '').replace(/\s/g, '');

                                            // Obtener la posición del cursor antes de formatear el número
                                            var posicionCursor = inputElement.selectionStart;

                                            // Verificar si es un número válido
                                            if (!isNaN(numeroSinComas)) {
                                                // Formatear el número con comas cada tres dígitos a la izquierda del punto decimal
                                                var valorFormateado = parseFloat(numeroSinComas).toLocaleString('en-US', {
                                                    minimumFractionDigits: 2,
                                                    maximumFractionDigits: 2
                                                });

                                                // Actualizar el valor del input con el formato deseado
                                                inputElement.value = valorFormateado;

                                                // Restaurar la posición del cursor después de la formatear el número
                                                inputElement.setSelectionRange(posicionCursor, posicionCursor);
                                            }

                                            // Actualizar el valor del campo oculto sin comas
                                            document.getElementById(id + '_sin_comas').value = numeroSinComas;
                                        }
                                    </script>

                                    <hr class="my-4">

                                    <label for="ganancia" class="form-label">Ganancia</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ganancia" placeholder="0.00"
                                            disabled>
                                    </div>

                                    <label for="margen" class="form-label mt-3">Margen de beneficio (%)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="margen" placeholder="0%"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-default card-md mb-4">

                                <div class="card-header">
                                    <h4 class="card-header-title">Organization</h4>
                                </div>


                                <div class="card-body">
                                    <div class="mb-4">
                                        <label for="proveedor_id" class="form-label">Proveedor</label>
                                        <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                                            <option value="">-- Elegir Proveedor --</option>
                                            @foreach ($proveedor as $proveedores)
                                                <option value="{{ $proveedores->id }}">{{ $proveedores->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="categoria_id">Categoria</label>
                                        <select name="categoria_id" id="categoria_id" class="form-select" required>
                                            <option value="">-- Elegir Categoria --</option>
                                            @foreach ($categoria as $categorias)
                                                <option value="{{ $categorias->id }}">{{ $categorias->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <input type="hidden" name="opciones" id="opciones_input">
                                    <input type="hidden" name="opciones_variedades" id="opciones_variedades_input">

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}", null, {
                "timeOut": 5000,
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "style": "background-color: red;"
            });
        </script>
    @endif
@endsection
@section('js')
    <script>
        // Obtén una referencia al botón "Nueva Variante" y al contenedor del formulario
        var nuevaVarianteButton = document.getElementById('nueva-variante-button');
        var formularioContainer = document.getElementById('formulario-container');

        // Agrega un manejador de eventos al botón para mostrar u ocultar el formulario
        nuevaVarianteButton.addEventListener('click', function() {
            if (formularioContainer.style.display === 'none' || formularioContainer.style.display === '') {
                // Si el formulario está oculto, muéstralo
                formularioContainer.style.display = 'block';
            } else {
                // Si el formulario está visible, ocúltalo
                formularioContainer.style.display = 'none';
            }
        });

        var input = document.getElementById('variedades');
        var tagify = new Tagify(input, {});
        var tarjetasContainer = document.getElementById('tarjetas-container');
        var combinationsTable = document.getElementById('combinations-table');
        var updateButton = document.getElementById('update-button'); // Botón de actualización

        document.getElementById('formulario').addEventListener('button', function(e) {
            e.preventDefault(); // Evitar la recarga de la página
            cancelForm();
        });

        // Agrega una función para cancelar el formulario
        function cancelForm() {
            // Oculta el formulario
            formularioContainer.style.display = 'none';
        }

        updateButton.style.display = 'none'; // Ocultar el botón de actualización inicialmente

        // Agrega un manejador de eventos para el envío del formulario
        document.getElementById('formulario').addEventListener('submit', function(e) {
            e.preventDefault(); // Evitar la recarga de la página
            submitForm();
        });

        function submitForm() {
            var nombreVariante = document.getElementById('nombre-variante').value;
            var tags = tagify.value.map(tag => tag.value);

            createTarjeta(nombreVariante, tags);
            tagify.removeAllTags();
            document.getElementById('nombre-variante').value = '';

            // Oculta el formulario después de enviarlo
            formularioContainer.style.display = 'none';
        }

        function createTarjeta(nombreVariante, tags) {
            var tarjeta = document.createElement('div');
            tarjeta.classList.add('tarjeta-body');

            var tarjetaTitle = document.createElement('h3');
            tarjetaTitle.classList.add('tarjeta-title');
            tarjetaTitle.textContent = nombreVariante; // Mostrar el nombre de la variante
            tarjeta.appendChild(tarjetaTitle);

            var badgesContainer = document.createElement('div');
            badgesContainer.classList.add('badge-container');

            tags.forEach(tag => {
                var badge = document.createElement('span');
                badge.classList.add('badge', 'badge-secondary', 'badge-pill', 'mb-4');
                badge.textContent = tag;
                badge.setAttribute('data-group', nombreVariante); // Asignar el grupo al atributo "data-group"
                badgesContainer.appendChild(badge);
            });

            tarjeta.appendChild(badgesContainer);

            var dropdown = createDropdown();
            tarjeta.appendChild(dropdown);

            // Agregar manejadores de eventos a las opciones de "Editar" y "Eliminar" en la tarjeta recién creada
            tarjeta.querySelector('.edit-option').addEventListener('click', function() {
                editTarjeta(tarjeta);
            });
            tarjeta.querySelector('.delete-option').addEventListener('click', function() {
                deleteTarjeta(tarjeta);
            });

            // Asignar un identificador único a la tarjeta
            var tarjetaId = Date.now(); // Puedes utilizar una estrategia más robusta para generar identificadores únicos

            tarjeta.setAttribute('data-id', tarjetaId);

            tarjetasContainer.appendChild(tarjeta);

            // Actualiza las combinaciones y muéstralas en la tabla
            updateCombinations();
        }

        function createDropdown() {
            var dropdown = document.createElement('div');
            dropdown.classList.add('dropdown');

            // Crear el botón de Bootstrap y agregar las clases personalizadas
            var dropdownButton = document.createElement('button');
            dropdownButton.classList.add('btn', 'btn-primary', 'dropdown-toggle', 'btn-sm');
            dropdownButton.role = 'button';
            dropdownButton.setAttribute('data-bs-toggle', 'dropdown');
            dropdownButton.setAttribute('aria-expanded', 'false');
            dropdownButton.textContent = 'Opciones';
            dropdown.appendChild(dropdownButton);

            var dropdownMenu = document.createElement('ul');
            dropdownMenu.classList.add('dropdown-menu');

            // Agregar elementos del menú con las clases personalizadas
            var editOption = document.createElement('li');
            editOption.innerHTML = '<a class="dropdown-item edit-option">Editar</a>';
            dropdownMenu.appendChild(editOption);

            var deleteOption = document.createElement('li');
            deleteOption.innerHTML = '<a class="dropdown-item delete-option">Eliminar</a>';
            dropdownMenu.appendChild(deleteOption);

            dropdown.appendChild(dropdownMenu);

            return dropdown;
        }

        var combinations = new Set();

        function updateCombinations() {
            // Obtén todas las etiquetas con la clase "badge"
            var badgeElements = document.querySelectorAll('.badge');

            // Extrae las variedades y grupos de las etiquetas
            var badgeData = Array.from(badgeElements).map(badge => ({
                variety: badge.textContent,
                group: badge.getAttribute('data-group')
            }));

            // Agrupa las variedades por grupos
            var groupVarieties = {};
            badgeData.forEach(item => {
                if (!groupVarieties[item.group]) {
                    groupVarieties[item.group] = new Set();
                }
                groupVarieties[item.group].add(item.variety);
            });

            // Genera las combinaciones
            combinations = new Set(); // Usamos un conjunto para evitar duplicados

            var groups = Object.keys(groupVarieties);

            var generateCombinations = function(index, combination) {
                if (index === groups.length) {
                    // Esta es una combinación completa, agrega las variedades al conjunto
                    combinations.add([...combination]);
                    return;
                }

                var group = groups[index];
                groupVarieties[group].forEach(variety => {
                    generateCombinations(index + 1, [...combination, variety]);
                });
            };

            generateCombinations(0, []);

            // Muestra las combinaciones en la tabla
            displayCombinations();
        }

        function displayCombinations() {
            combinationsTable.innerHTML = ''; // Limpiamos la tabla

            if (combinations.size > 0) {
                combinations.forEach((combinationArray, index) => { // Agregar el índice
                    var tableResponsiveDiv = document.createElement('div');
                    tableResponsiveDiv.classList.add('table-responsive');

                    var row = document.createElement('tr');
                    var combination = combinationArray.join(' - ');

                    // Agregar una columna para la imagen
                    var cellImage = document.createElement('td');
                    cellImage.classList.add('image-cell');

                    var inputImage = document.createElement('input');
                    inputImage.type = 'file', 'hidden';
                    inputImage.name = 'variantes[' + index +
                        '][imagen]'; // Asignar el nombre del campo con el índice
                    inputImage.classList.add('form-control');
                    inputImage.addEventListener('change', function(event) {
                        displayImagePreviews(event.target, cellImage);
                    });
                    cellImage.appendChild(inputImage);

                    row.appendChild(cellImage);

                    // Agregar una columna para la combinación
                    var cellCombination = document.createElement('td');
                    cellCombination.textContent = combination;
                    row.appendChild(cellCombination);

                    // Agregar un campo oculto para la combinación
                    var inputCombination = document.createElement('input');
                    inputCombination.type = 'hidden';
                    inputCombination.name = 'variantes[' + index +
                        '][combinacion]'; // Asignar el nombre del campo con el índice
                    inputCombination.value = combination;
                    row.appendChild(inputCombination);

                    // Agregar una columna para el precio actual
                    var cellPrice = document.createElement('td');
                    var inputPrice = document.createElement('input');
                    inputPrice.type = 'number', 'hidden';
                    inputPrice.name = 'variantes[' + index +
                        '][precio]'; // Asignar el nombre del campo con el índice
                    inputPrice.classList.add('form-control');
                    inputPrice.value = '0';
                    cellPrice.appendChild(inputPrice);
                    row.appendChild(cellPrice);

                    // Agregar una columna para el stock
                    var cellStock = document.createElement('td');
                    var inputStock = document.createElement('input');
                    inputStock.type = 'number', 'hidden';
                    inputStock.name = 'variantes[' + index +
                        '][stock]'; // Asignar el nombre del campo con el índice
                    inputStock.classList.add('form-control');
                    inputStock.value = '0';
                    cellStock.appendChild(inputStock);
                    row.appendChild(cellStock);

                    // Agregar una columna para el stock2
                    var cellStock2 = document.createElement('td');
                    var inputStock2 = document.createElement('input');
                    inputStock2.type = 'number', 'hidden';
                    inputStock2.name = 'variantes[' + index +
                        '][stock2]'; // Asignar el nombre del campo con el índice
                    inputStock2.classList.add('form-control');
                    inputStock2.value = '0';
                    cellStock2.appendChild(inputStock2);
                    row.appendChild(cellStock2);

                    // Agregar una columna para el SKU
                    var cellSku = document.createElement('td');
                    var inputSku = document.createElement('input');
                    inputSku.type = 'text', 'hidden';
                    inputSku.name = 'variantes[' + index + '][sku]'; // Asignar el nombre del campo con el índice
                    inputSku.classList.add('form-control');
                    inputSku.value = '0';
                    cellSku.appendChild(inputSku);
                    row.appendChild(cellSku);

                    // Agregar una columna para el peso
                    var cellWeight = document.createElement('td');
                    var inputWeight = document.createElement('input');
                    inputWeight.type = 'number', 'hidden';
                    inputWeight.name = 'variantes[' + index +
                        '][peso]'; // Asignar el nombre del campo con el índice
                    inputWeight.classList.add('form-control');
                    cellWeight.appendChild(inputWeight);
                    inputWeight.value = '0';
                    row.appendChild(cellWeight);

                    // Agregar una columna para el estado
                    var cellEstado = document.createElement('td');
                    var selectEstado = document.createElement('select');
                    selectEstado.name = 'variantes[' + index +
                        '][estado]'; // Asignar el nombre del campo con el índice
                    selectEstado.classList.add('form-control');
                    var optionExistente = document.createElement('option');
                    optionExistente.value = 'existente';
                    optionExistente.textContent = 'Existente';
                    var optionAgotado = document.createElement('option');
                    optionAgotado.value = 'agotado';
                    optionAgotado.textContent = 'Agotado';
                    selectEstado.appendChild(optionExistente);
                    selectEstado.appendChild(optionAgotado);
                    cellEstado.appendChild(selectEstado);
                    row.appendChild(cellEstado);

                    combinationsTable.appendChild(row);
                });
            }
        }

        // Función para mostrar las vistas previas de las imágenes en la misma celda de la tabla
        function displayImagePreviews(input, cell) {
            cell.innerHTML = ''; // Limpiar cualquier vista previa existente

            for (var i = 0; i < input.files.length; i++) {
                var file = input.files[i];
                var imagePreview = document.createElement('img');
                imagePreview.classList.add('image-preview');
                imagePreview.file = file;

                // Utiliza FileReader para cargar y mostrar la vista previa de la imagen
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(imagePreview);

                reader.readAsDataURL(file);
                cell.appendChild(imagePreview);
            }
        }

        // Agregar manejadores de eventos a las opciones de "Editar" y "Eliminar"
        tarjetasContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('edit-option')) {
                // Editar tarjeta
                editTarjeta(event.target.closest('.tarjeta-body'));
            } else if (event.target.classList.contains('delete-option')) {
                // Eliminar tarjeta
                deleteTarjeta(event.target.closest('.tarjeta-body'));
            }
        });

        // Función para editar tarjeta
        function editTarjeta(tarjeta) {
            // Oculta el contenido actual de la tarjeta (título y variedades)
            tarjeta.querySelector('.tarjeta-title').style.display = 'none';
            tarjeta.querySelector('.badge-container').style.display = 'none';

            // Crea un formulario de edición y agrega los campos
            var editForm = document.createElement('form');
            editForm.classList.add('edit-form');

            var nombreVarianteInput = document.createElement('input');
            nombreVarianteInput.type = 'text';
            nombreVarianteInput.classList.add('form-control', 'mb-4');
            nombreVarianteInput.placeholder = 'Editar nombre de variante';
            nombreVarianteInput.value = tarjeta.querySelector('.tarjeta-title').textContent;

            var tagifyInput = document.createElement('input');
            tagifyInput.id = 'edit-variedades';
            tagifyInput.type = 'text';
            tagifyInput.classList.add('form-control', 'mb-4');
            tagifyInput.placeholder = 'Editar variedades';

            // Obtén los tags existentes de la tarjeta y agrégalos al campo Tagify
            var existingTags = Array.from(tarjeta.querySelectorAll('.badge')).map(tag => tag.textContent);
            tagifyInput.value = existingTags.join(', ');

            var cancelarButton = document.createElement('button');
            cancelarButton.type = 'button';
            cancelarButton.classList.add('btn', 'btn-secondary', 'cancel-button');
            cancelarButton.textContent = 'Cancelar';

            var actualizarButton = document.createElement('button');
            actualizarButton.type = 'button';
            actualizarButton.classList.add('btn', 'btn-primary', 'update-button');
            actualizarButton.textContent = 'Actualizar';

            // Agrega los campos y botones al formulario
            editForm.appendChild(nombreVarianteInput);
            editForm.appendChild(tagifyInput);
            editForm.appendChild(cancelarButton);
            editForm.appendChild(actualizarButton);

            // Agrega el formulario al contenido de la tarjeta
            tarjeta.appendChild(editForm);

            // Oculta el botón "Editar"
            tarjeta.querySelector('.edit-option').style.display = 'none';

            // Inicializa Tagify para la edición de variedades
            var tagify = new Tagify(tagifyInput, {});

            // Agrega manejadores de eventos para "Cancelar" y "Actualizar"
            cancelarButton.addEventListener('click', function() {
                // Restaura la vista normal de la tarjeta
                restoreNormalView(tarjeta);
            });

            actualizarButton.addEventListener('click', function() {
                // Actualiza la tarjeta con los nuevos datos
                updateTarjeta(tarjeta, tagify.value);
            });
        }

        // Función para restaurar la vista normal de la tarjeta
        function restoreNormalView(tarjeta) {
            tarjeta.querySelector('.tarjeta-title').style.display = 'block';
            tarjeta.querySelector('.badge-container').style.display = 'block';
            tarjeta.querySelector('.edit-form').remove();
            tarjeta.querySelector('.edit-option').style.display = 'block';
        }

        // Función para actualizar tarjeta
        function updateTarjeta(tarjeta, newTags) {
            var tarjetaId = tarjeta.getAttribute('data-id'); // Obtener el ID de la tarjeta a actualizar
            var nombreVariante = tarjeta.querySelector('.edit-form input[type="text"]').value;

            // Elimina la tarjeta existente con el mismo ID
            tarjetasContainer.removeChild(tarjeta);

            // Convierte newTags (objeto) a un arreglo de strings
            var newTagsArray = newTags.map(tag => tag.value);

            // Crea y agrega la tarjeta actualizada
            createTarjeta(nombreVariante, newTagsArray);

            // Restablece el formulario y el botón
            document.getElementById('nombre-variante').value = '';
            tagify.removeAllTags();
            updateButton.style.display = 'none';

            // Actualiza las combinaciones
            updateCombinations();
        }

        // Función para eliminar tarjeta
        function deleteTarjeta(tarjeta) {
            var variantName = tarjeta.getAttribute('data-variant'); // Obtener el nombre de la variante
            tarjetasContainer.removeChild(tarjeta);

            // Eliminar todas las etiquetas de la variante
            var tagsToDelete = document.querySelectorAll('.badge[data-group="' + variantName + '"]');
            tagsToDelete.forEach(tag => tag.remove());

            // Actualiza las combinaciones después de eliminar
            updateCombinations();

            // Verifica si ya no hay variantes y oculta la tabla si es necesario
            var variantCards = document.querySelectorAll('.tarjeta-body');
            if (variantCards.length === 0) {
                combinationsTable.innerHTML = ''; // Limpiar la tabla
            }
        }
    </script>

    <script>
        // Función para calcular la ganancia y el margen de beneficio
        function calcularGanancia() {
            const precio = parseFloat(document.getElementById("precio").value);
            const costo = parseFloat(document.getElementById("costo").value);
            const disponibilidad = document.getElementById("Disponibilidad").checked;

            if (isNaN(precio) || isNaN(costo)) {
                document.getElementById("ganancia").value = "0.00";
                document.getElementById("margen").value = "0%";
            } else {
                const ganancia = disponibilidad ? (precio - costo) : (costo - precio);
                const margen = ((ganancia / costo) * 100).toFixed(2);

                document.getElementById("ganancia").value = ganancia.toFixed(2);
                document.getElementById("margen").value = margen + "%";
            }
        }

        // Escuchar eventos de cambio en los campos relevantes
        document.getElementById("precio").addEventListener("input", calcularGanancia);
        document.getElementById("costo").addEventListener("input", calcularGanancia);
        document.getElementById("Disponibilidad").addEventListener("change", calcularGanancia);

        // Calcular ganancia inicial
        calcularGanancia();
    </script>

    <script>
        var dropzone = document.getElementById("dropzone");
        var fileInput = document.getElementById("imagenes");
        var previewContainer = document.getElementById("preview-container");
        var toastContainer = document.getElementById("toast-container");

        dropzone.addEventListener("dragover", function(e) {
            e.preventDefault();
            dropzone.classList.add("dragover");
        });

        dropzone.addEventListener("dragleave", function() {
            dropzone.classList.remove("dragover");
        });

        dropzone.addEventListener("drop", function(e) {
            e.preventDefault();
            dropzone.classList.remove("dragover");

            var files = e.dataTransfer.files;
            handleFiles(files);
        });

        fileInput.addEventListener("change", function() {
            var files = fileInput.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                uploadFile(file);
            }
        }

        function uploadFile(file) {
            // Verificar si la imagen ya ha sido subida previamente
            var previewCards = document.querySelectorAll(".preview-card");
            for (var i = 0; i < previewCards.length; i++) {
                var previewCard = previewCards[i];
                var nameElement = previewCard.querySelector(".name");
                var fileName = nameElement.textContent;
                if (fileName === file.name) {
                    // Mostrar mensaje de imagen repetida
                    showToast("La imagen '" + file.name + "' ya ha sido subida.");
                    return;
                }
            }

            var reader = new FileReader();
            var imgSrc = "";
            var fileName = file.name;
            var fileSize = formatFileSize(file.size);
            var previewCard = createPreview(imgSrc, fileName, fileSize);
            previewContainer.appendChild(previewCard);

            reader.onprogress = function(event) {
                if (event.lengthComputable) {
                    var progress = Math.round((event.loaded / event.total) * 100);
                    updateProgress(file, progress);
                }
            };

            reader.onload = function(event) {
                imgSrc = event.target.result;
                var img = previewCard.querySelector("img");
                img.src = imgSrc;
                updateProgress(file, 100);
            };

            reader.readAsDataURL(file);
        }

        function createPreview(imgSrc, fileName, fileSize) {
            var previewCard = document.createElement("div");
            previewCard.classList.add("upload-product-media", "d-flex", "justify-content-between", "align-items-center",
                "mt-25");

            var imgContainer = document.createElement("div");
            imgContainer.classList.add("upload-media-area", "d-flex");

            var img = document.createElement("img");
            img.src = imgSrc;
            img.alt = "img";
            img.style.width = "100px"; // Tamaño fijo de la imagen
            img.style.height = "80px"; // Tamaño fijo de la imagen
            img.style.aspectRatio = "3/2"; // Aspect ratio 3/2
            img.style.objectFit = "contain"; // object-fit: contain
            imgContainer.appendChild(img);

            var infoContainer = document.createElement("div");
            infoContainer.classList.add("upload-media-area__title", "d-flex", "flex-column", "ml-10");

            var nameInfo = document.createElement("div");
            var name = document.createElement("p");
            name.textContent = fileName;
            nameInfo.appendChild(name);

            var sizeInfo = document.createElement("span");
            sizeInfo.textContent = fileSize;
            nameInfo.appendChild(sizeInfo);

            infoContainer.appendChild(nameInfo);

            var progressContainer = document.createElement("div");
            progressContainer.classList.add("progress-wrap", "d-flex", "align-items-center");

            var progressBar = document.createElement("div");
            progressBar.classList.add("progress");

            var progressBarInner = document.createElement("div");
            progressBarInner.classList.add("progress-bar", "bg-success");
            progressBarInner.style.width = "100%";

            progressBar.appendChild(progressBarInner);
            progressContainer.appendChild(progressBar);

            var successIcon = document.createElement("span");
            successIcon.classList.add("progress-icon");
            successIcon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle color-success">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        `;

            progressContainer.appendChild(successIcon);

            infoContainer.appendChild(progressContainer);
            imgContainer.appendChild(infoContainer);

            var deleteBtnContainer = document.createElement("div");
            deleteBtnContainer.classList.add("upload-media-area__btn");

            var deleteBtn = document.createElement("button");
            deleteBtn.type = "button";
            deleteBtn.classList.add("transparent", "rounded-circle", "wh-30", "border-0", "color-danger");

            var deleteIconSvg = `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
        `;

            deleteBtn.innerHTML = deleteIconSvg;

            deleteBtn.addEventListener("click", function() {
                previewCard.parentElement.removeChild(previewCard);
            });

            deleteBtnContainer.appendChild(deleteBtn);
            imgContainer.appendChild(deleteBtnContainer);

            previewCard.appendChild(imgContainer);

            return previewCard;
        }


        function formatFileSize(bytes) {
            if (bytes === 0) return "0 Bytes";
            var k = 1024;
            var sizes = ["Bytes", "KB", "MB", "GB", "TB"];
            var i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + " " + sizes[i];
        }

        function updateProgress(file, progress) {
            var previewCards = document.querySelectorAll(".preview-card");
            for (var i = 0; i < previewCards.length; i++) {
                var previewCard = previewCards[i];
                var nameElement = previewCard.querySelector(".name");
                var fileName = nameElement.textContent;
                if (fileName === file.name) {
                    var progressBarInner = previewCard.querySelector(".progress-bar-inner");
                    progressBarInner.style.width = progress + "%";
                    if (progress === 100) {
                        previewCard.classList.add("success");
                    }
                    break;
                }
            }
        }

        function showToast(message) {
            var toast = document.createElement("div");
            toast.classList.add("toast");
            toast.textContent = message;
            toastContainer.appendChild(toast);

            // Mostrar el toast
            setTimeout(function() {
                toast.style.opacity = 1;
            }, 100);

            // Ocultar el toast después de unos segundos
            setTimeout(function() {
                toast.style.opacity = 0;
                // Remover el toast del DOM después de la animación de desvanecimiento
                setTimeout(function() {
                    toastContainer.removeChild(toast);
                }, 300);
            }, 3000);
        }
    </script>
@endsection

@section('css')
    <style>
        /* Estilos para la celda de la imagen */
        .image-cell {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilos para las vistas previas de las imágenes */
        .image-preview {
            max-width: 100px;
            /* Ancho máximo de las vistas previas */
            max-height: 100px;
            /* Altura máxima de las vistas previas */
            object-fit: cover;
            /* Borde alrededor de cada vista previa */
            margin-top: 5px;
            /* Espacio entre vistas previas */
        }
    </style>

    <style>
        .input-field {
            width: 100%;
        }

        .btn-float-right {
            float: right;
        }

        .input-container {
            display: flex;
            align-items: center;
            /* Alinea verticalmente los elementos */
            margin-right: 10px;
            /* Espacio entre los elementos */
        }

        .variant-input {
            flex: 1;
            /* Se expandirá para ocupar todo el espacio disponible */
            margin-right: 5px;
            /* Espacio entre el input y el botón de delete */
        }

        .delete-icon {
            cursor: pointer;
        }
    </style>

    <style>
        .dropzone {
            border: 2px dashed #ccc;
            padding: 50px;
            text-align: center;
        }

        .dragover {
            background-color: #f7f7f7;
        }

        .preview-card {
            display: inline-block;
            width: 200px;
            margin-right: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            position: relative;
        }

        .preview-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .preview-card .name {
            font-weight: bold;
        }

        .preview-card .size {
            font-size: 12px;
            color: #888;
        }

        .preview-card .progress-bar {
            height: 5px;
            background-color: #f0f0f0;
            margin-top: 5px;
        }

        .preview-card .progress-bar-inner {
            height: 100%;
            background-color: #4caf50;
            width: 0;
        }

        .preview-card .success-mark {
            margin-left: 5px;
            color: #4caf50;
            font-size: 12px;
        }

        .delete-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: none;
            border: none;
            font-size: 14px;
            cursor: pointer;
        }

        /* Estilos para el toast */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .toast {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            margin-bottom: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
    </style>
@endsection
