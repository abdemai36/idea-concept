    <footer>
        footer
    </footer>
    <div class="delete-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
        <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="pb-3">
                    <p class="text-2xl font-bold">Attention !!</p>
                </div>
                <!--Body-->
                <div class="my-5 space-y-5">
                    <p>Voulez-vous vraiment supprimer cet email?</p>
                    <div class="float-right pb-3">
                        <button class="bg-gray-400 p-2 rounded deleteModal-close">Annuler</button>

                        <button class="bg-red-500 p-2 text-white rounded btn_delete_post_model">Suprimmer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // script d pop up
        const modal = document.querySelector('.main-modal');
        const closeButton = document.querySelectorAll('.modal-close');

        
        const modalClose = () => {
            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500);
        }

        const openModal = () => {
            modal.classList.remove('fadeOut');
            modal.classList.add('fadeIn');
            modal.style.display = 'flex';
        }

        for (let i = 0; i < closeButton.length; i++) {

            const elements = closeButton[i];

            elements.onclick = (e) => modalClose();

            modal.style.display = 'none';

            window.onclick = function(event) {
                if (event.target == modal) modalClose();
            }
        }


        // delete pop up
        const deleteModal = document.querySelector('.delete-modal');
        const closedeleteButton = document.querySelectorAll('.deleteModal-close');
        
        const deleteModalClose = () => {
            deleteModal.classList.remove('fadeIn');
            deleteModal.classList.add('fadeOut');
            setTimeout(() => {
                deleteModal.style.display = 'none';
            }, 500);
        }


        const opendeleteModal = () => {
            deleteModal.classList.remove('fadeOut');
            deleteModal.classList.add('fadeIn');
            deleteModal.style.display = 'flex';
        }

        for (let i = 0; i < closedeleteButton.length; i++) {

            const elements = closedeleteButton[i];

            elements.onclick = (e) => deleteModalClose();

            deleteModal.style.display = 'none';

            window.onclick = function(event) {
                if (event.target == deleteModal) deleteModalClose();
            }
        }
    </script>   
    <script src="jquery-3.6.0.min.js"></script>
    <script src="Script.js"></script>
</body>
</html>
    