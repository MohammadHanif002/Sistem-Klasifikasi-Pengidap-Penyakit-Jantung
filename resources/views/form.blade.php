<x-layout title="Prediksi Penyakit Jantung">
    <section class="max-w-xl mx-auto py-20 px-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-red-400">🫀 Form Klasifikasi Penyakit Jantung</h2>

        <form action="{{ route('pasien.predict') }}" method="POST"
            class="space-y-6 bg-white/5 p-6 rounded-2xl border border-white/10 backdrop-blur-md shadow-md">
            @csrf

            @php
                $fields = [
                    'age' => 'Usia (dalam tahun)',
                    'sex' => 'Jenis Kelamin (1 = Laki-laki, 0 = Perempuan)',
                    'cp' => 'Tipe Nyeri Dada (0–3)',
                    'trestbps' => 'Tekanan Darah Istirahat (mm Hg)',
                    'chol' => 'Kolesterol Total (mg/dl)',
                    'fbs' => 'Gula Darah Puasa > 120 mg/dl (1 = Ya, 0 = Tidak)',
                    'restecg' => 'Hasil EKG Istirahat (0–2)',
                    'thalach' => 'Denyut Jantung Maksimal',
                    'exang' => 'Angina karena Olahraga (1 = Ya, 0 = Tidak)',
                    'oldpeak' => 'Depresi ST Saat Latihan (float)',
                    'slope' => 'Kemiringan ST (0–2)',
                ];
            @endphp

            @foreach ($fields as $key => $label)
                <div>
                    <label for="{{ $key }}" class="block mb-1 text-gray-300">{{ $label }}</label>
                    <input
                        type="{{ $key === 'oldpeak' ? 'number' : 'number' }}"
                        step="{{ $key === 'oldpeak' ? '0.1' : '1' }}"
                        name="{{ $key }}"
                        id="{{ $key }}"
                        class="w-full p-3 bg-gray-800 border border-gray-700 rounded text-white"
                        required
                    >
                </div>
            @endforeach

            <button type="submit"
                class="w-full bg-red-500 text-white py-3 rounded hover:bg-red-600 font-semibold shadow-md transition">
                Prediksi Sekarang
            </button>
        </form>

        @if (session()->has('hasil'))
            <div class="mt-10 text-center">
                <h3 class="text-xl text-white mb-2">Hasil Prediksi:</h3>
                <p class="text-2xl font-bold {{ session('hasil') === 1 ? 'text-red-400' : 'text-green-400' }}">
                    {{ session('hasil') === 1 ? '✅ Positif Penyakit Jantung' : '❌ Negatif / Sehat' }}
                </p>
            </div>
        @endif
    </section>
</x-layout>
