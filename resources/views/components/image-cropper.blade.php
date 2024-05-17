<div>
    <div class="px-4" x-show="showCrop" x-data="(() => ({
        cropper: null,
        previewImage: '',
        image: null,
        imageIsCropped: false,
        init() {
            this.image = this.$refs.cropperImage;
            if (this.cropper != null) {
                this.cropper.destroy();
            }
            setTimeout(() => {
                this.cropper = new Cropper(this.image, {
                    viewMode: 1,
                    crop(event) {
                        this.image = this.cropper.getCroppedCanvas().toDataURL();
                    },
                });
            }, 500);
        },
        crop() {
            this.cropper.getCroppedCanvas();
    
            this.cropper.getCroppedCanvas({
                width: 500,
                height: 500,
                imageSmoothingEnabled: false,
                imageSmoothingQuality: 'high',
            });
    
            this.cropper.getCroppedCanvas().toBlob((blob) => {
                this.image = URL.createObjectURL(blob);
                const reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = (e) => {
                    this.previewImage = e.target.result;
                    $wire.set('signature_image', e.target.result);
                };
            } /*, 'image/png' */ );
            this.imageIsCropped = true;
        },
        acceptImage() {
            $wire.call('verifyImage');
        },
        destroy() {
            if (this.cropper) {
                this.cropper.destroy();
                this.cropper = null;
                $wire.set('signature_upload', '');
            }
        },
    
    }))()" x-cloak>
        <div class="w-full flex items-center justify-between">
            <p class="text-lg font-medium text-gray-700">
                Upload a signature
            </p>
            <button type="button" x-on:click="destroy"
                class="text-blue-500 bg-transparent hover:text-blue-700 border-none">
                <span class="material-icons">
                    delete
                </span>
            </button>
        </div>
        <div class="text-center w-full grid grid-cols-1 lg:grid-cols-2 gap-6 mb-2">
            <div wire:ignore>
                <img x-ref="cropperImage" src="{{ $src }}" alt="" onerror="this.remove()"
                    class="block w-full h-auto object-cover">
                <x-button type="button" x-on:click="crop" class="mt-2">
                    Crop
                </x-button>
            </div>
            <div>
                <img :src="previewImage" alt="Preview" class="block w-full h-auto object-cover"
                    onerror="this.remove()">

                <x-button type="button" x-on:click="acceptImage" x-show="imageIsCropped" class="mt-2">
                    Accept
                </x-button>
            </div>
        </div>
    </div>
</div>
