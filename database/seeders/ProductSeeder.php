<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $d = [
            // Digital Product
            [
                'title' => 'Netflix Premium',
                'image' => 'https://aditianovit.com/wp-content/uploads/2023/05/Netflix-Premiumv.jpg',
                'category' => 'digital_product',
                'desc' => '🔰NETFLIX PREMIUM🔰

                🔖Sharing
                1 Bulan 1 Profil 1 User : Rp. 34,000
                (Req Profil/Pin + 2,000)
                
                1 Bulan 1 Profil 2 User : Rp. 24,000
                
                🔖Private
                1 Bulan 5 Profil : Rp. 125,000
                
                Note :
                - Full Garansi
                - 1 Bulan (27-31 Day)
                - Proses Garansi Max 2*24 Jam',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Youtube Premium',
                'image' => 'https://esportsku.com/tech/wp-content/uploads/2022/10/youtube-premium.png',
                'category' => 'digital_product',
                'desc' => '🔰YOUTUBE PREMIUM🔰

                🔖 Individual
                4 Bulan (No Garansi) : Rp. 15,000
                4 Bulan (Gar 1x Replace) : Rp. 20,000
                
                Note:
                - Email dari Seller
                - Acc Seller Garansi sesuai List
                - Garansi kalo Acc Backfree/Kenon
                - Langsung Change PW, tidak menerima Komplain PW salah dikemudian hari
                - Harga bisa berubah sewaktu waktu.',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'VIU Premium',
                'image' => 'https://www.viu.com/ott/id/articles/wp-content/uploads/2021/10/viu-premium-1.jpeg',
                'category' => 'digital_product',
                'desc' => '🔰VIU PREMIUM🔰

                🔖 Private
                6 Bulan : Rp. 14,000
                12 Bulan : Rp. 18,000
                
                Note :
                - Akun dari seller
                - Garansi 6 Bulan
                - Tanyakan Stok sebelum Order',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Canva PRO',
                'image' => 'https://down-id.img.susercontent.com/file/67126cb461e0e387c435e2eae88e6a48',
                'category' => 'digital_product',
                'desc' => '[ CANVA PRO ]

                [ VIA INVITE 1 BULAN ]
                
                » Email buyer : ( Rp. 3,000 )
                » Brand Designer
                
                [ VIA INVITE 45 HARI ]
                
                » Email buyer : ( Rp. 5,000 )
                » Brand Designer
                ≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠
                
                [ CANVA OWNER 1 BULAN ]
                
                » Email seller : ( Rp. 6,000 )
                » Owner
                » Bisa invite member
                
                [ CANVA OWNER 45 HARI ]
                
                » Email seller : ( Rp. 8,000 )
                » Owner
                » Bisa invite member
                ≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠
                
                Note : [ Canva Invite ]
                » Via invite email buyer
                » Brand Designer
                » Design ga tercampur sama yg lain.
                
                Note : [ Canva Owner ]
                » Email dari seller
                » Boleh ganti password
                » Bisa invite member
                » Invite up to 500 member',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Chat GPT Plus (Sharing)',
                'image' => 'https://www.geeky-gadgets.com/wp-content/uploads/2023/06/What-is-ChatGPT-plus.webp',
                'category' => 'digital_product',
                'desc' => '[ CHAT GPT+ SHARING ]

                » 1 Bulan
                » Akun dari seller ( 50k )
                » ChatGPT 3.5
                » ChatGPT 4
                » ChatGPT Plus
                
                Fitur :
                » Bisa Untuk Developer Web & Aplikasi
                » Build an application:
                » Chat (Beta)
                » Text completion
                » Embeddings
                » Speech to text (Beta)
                » Image generation (Beta)
                » Fine-tuning
                » Build a ChatGPT plugin (Alpha)
                
                Note :
                » Login langsung dari chat GPT
                » Akun sharing ( 1 Akun lebih dari 4 user )
                
                Status GARANSI',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            
            // Hosting
            [
                'title' => 'Paket Hosting Galau',
                'category' => 'hosting',
                'image' => 'https://w7.pngwing.com/pngs/440/752/png-transparent-wordpress-computer-icons-web-hosting-service-ticket-text-logo-area.png',
                'desc' => '
                [ HOSTING PAKET GALAU ]
                PRICE: Rp. 20,000 / Monthly

                » Disc Space 2GB
                » Unlimited Email
                » Unlimited Bandwidth
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Paket Hosting Udahan',
                'image' => 'https://w7.pngwing.com/pngs/440/752/png-transparent-wordpress-computer-icons-web-hosting-service-ticket-text-logo-area.png',
                'category' => 'hosting',
                'desc' => '
                [ HOSTING PAKET UDAHAN ]
                PRICE: Rp. 50,000 / Monthly

                » Disc Space 10GB
                » Unlimited Email
                » Unlimited Bandwidth
                » Jasa Setup
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Paket Hosting Ikhlasin',
                'image' => 'https://w7.pngwing.com/pngs/440/752/png-transparent-wordpress-computer-icons-web-hosting-service-ticket-text-logo-area.png',
                'category' => 'hosting',
                'desc' => '
                [ HOSTING PAKET IKHLASIN ]
                PRICE: Rp. 220,000 / Monthly
                » Disc Space 30GB
                » Unlimited Email
                » Unlimited Bandwidth
                » Jasa Setup
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],

            // VPS
            [
                'title' => 'Paket VPS Bertahan',
                'image' => 'https://media.istockphoto.com/id/1468256780/id/vektor/vps-virtual-private-server-web-hosting-layanan-teknologi-infrastruktur-ilustrasi-stok-vektor.jpg?s=170667a&w=0&k=20&c=LCFG8Ed6WOy0frAiIShbZcp_xouvUwAd8BUCvczxdj0=',
                'category' => 'vps',
                'desc' => '
                [ VPS PAKET Bertahan ]
                *VPS KVM NVMe Singapore
                
                PRICE: Rp. 80,000 / Monthly
                » 1 Core E5 2680 v4
                » 1 GB Ram DDR4
                » 20 GB NVMe SSD
                » 1 IPv4
                » 2TB Bandwidth 10gbps - Capped
                » 10mbps if exceeded

                NOTE:
                *Dengan penyimpanan NVMe load website akan sangat cepat. Bandwidth upto
                *Nyari tahunan? DM!
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Paket VPS Move On',
                'image' => 'https://media.istockphoto.com/id/1468256780/id/vektor/vps-virtual-private-server-web-hosting-layanan-teknologi-infrastruktur-ilustrasi-stok-vektor.jpg?s=170667a&w=0&k=20&c=LCFG8Ed6WOy0frAiIShbZcp_xouvUwAd8BUCvczxdj0=',
                'category' => 'vps',
                'desc' => '
                [ VPS PAKET Move On ]
                *VPS KVM NVMe Singapore
                
                PRICE: Rp. 200,000 / Monthly
                » 2 Core E5 2680 v4
                » 2 GB Ram DDR4
                » 25 GB NVMe SSD
                » 1 IPv4
                upto 100mbps unmetered bandwidth

                NOTE:
                *Dengan penyimpanan NVMe load website akan sangat cepat. Bandwidth upto
                *Nyari tahunan? DM!
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Paket VPS Cari Baru',
                'image' => 'https://media.istockphoto.com/id/1468256780/id/vektor/vps-virtual-private-server-web-hosting-layanan-teknologi-infrastruktur-ilustrasi-stok-vektor.jpg?s=170667a&w=0&k=20&c=LCFG8Ed6WOy0frAiIShbZcp_xouvUwAd8BUCvczxdj0=',
                'category' => 'vps',
                'desc' => '
                [ VPS PAKET Cari Baru ]
                *VPS KVM NVMe Singapore
                
                PRICE: Rp. 350,000 / Monthly
                » 4 Core E5 2680 v4
                » 4 GB Ram DDR4
                » 50 GB NVMe SSD
                » 1 IPv4
                upto 200mbps unmetered bandwidth

                NOTE:
                *Dengan penyimpanan NVMe load website akan sangat cepat. Bandwidth upto
                *Nyari tahunan? DM!
                ',
                'is_available' => 1,
                // 'price' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        
        Product::truncate();
        Product::insert($d);
    }
}
