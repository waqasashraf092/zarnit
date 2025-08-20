<?php

namespace App\Http\Controllers;

use App\Models\EarlyAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function products()
    {
        $products_lang = [
            'en' => [
                [
                    'name' => 'Zarn',
                    'description' => 'Zarn is our flagship AI productivity suite designed to transform how you work. By combining intelligent automation with intuitive interfaces, Zarn helps you eliminate repetitive tasks, organize information efficiently, and focus on high-value work.',
                    'features' => [
                        'Smart automation of repetitive tasks and workflows',
                        'Seamless integration with your existing tools and platforms',
                        'AI that learns from your behavior to provide personalized suggestions',
                        'Clean, intuitive interface designed for focus and efficiency',
                    ],
                    'tags' => ['Productivity', 'AI Assistant', 'Automation'],
                    'release' => 'Coming Soon',
                    'image' => asset('images/image_2.avif')
                ],
                [
                    'name' => 'Reolyy',
                    'description' => 'Reolyy leverages cutting-edge AI to revolutionize video editing. From automatic color correction to smart content analysis, Reolyy helps creators produce professional-quality videos in a fraction of the time.',
                    'features' => [
                        'AI-powered editing suggestions and automatic scene detection',
                        'Intelligent enhancement of lighting, color, and audio quality',
                        'Professional templates and styles for quick production',
                        'Streamlined export and sharing capabilities',
                    ],
                    'tags' => ['Video Editing', 'AI Enhancement', 'Creative Tools'],
                    'release' => 'Coming Soon',
                    'image' => asset('images/image_3.avif')
                ]
            ],
            'es' =>[
                [
                    'name' => 'Zarn',
                    'description' => 'Zarn es nuestra suite insignia de productividad con IA diseñada para transformar tu forma de trabajar. Al combinar la automatización inteligente con interfaces intuitivas, Zarn te ayuda a eliminar tareas repetitivas, organizar información de manera eficiente y enfocarte en el trabajo de alto valor.',
                    'features' => [
                        'Automatización inteligente de tareas y flujos de trabajo repetitivos',
                        'Integración fluida con tus herramientas y plataformas existentes',
                        'IA que aprende de tu comportamiento para ofrecer sugerencias personalizadas',
                        'Interfaz limpia e intuitiva diseñada para el enfoque y la eficiencia',
                    ],
                    'tags' => ['Productividad', 'Asistente de IA', 'Automatización'],
                    'release' => 'Próximamente',
                    'image' => asset('images/image_2.avif')
                ],
                [
                    'name' => 'Reolyy',
                    'description' => 'Reolyy aprovecha la IA de vanguardia para revolucionar la edición de video. Desde la corrección automática de color hasta el análisis inteligente de contenido, Reolyy ayuda a los creadores a producir videos de calidad profesional en una fracción del tiempo.',
                    'features' => [
                        'Sugerencias de edición impulsadas por IA y detección automática de escenas',
                        'Mejora inteligente de la iluminación, el color y la calidad del audio',
                        'Plantillas y estilos profesionales para una producción rápida',
                        'Capacidades optimizadas de exportación y uso compartido',
                    ],
                    'tags' => ['Edición de Video', 'Mejora con IA', 'Herramientas Creativas'],
                    'release' => 'Próximamente',
                    'image' => asset('images/image_3.avif')
                ]
            ],
            'fr' => [
                [
                    'name' => 'Zarn',
                    'description' => 'Zarn est notre suite phare de productivité IA conçue pour transformer votre façon de travailler. En combinant l’automatisation intelligente avec des interfaces intuitives, Zarn vous aide à éliminer les tâches répétitives, organiser efficacement l’information et vous concentrer sur les travaux à forte valeur ajoutée.',
                    'features' => [
                        'Automatisation intelligente des tâches et flux de travail répétitifs',
                        'Intégration fluide avec vos outils et plateformes existants',
                        'IA qui apprend de votre comportement pour fournir des suggestions personnalisées',
                        'Interface claire et intuitive conçue pour la concentration et l’efficacité',
                    ],
                    'tags' => ['Productivité', 'Assistant IA', 'Automatisation'],
                    'release' => 'Bientôt disponible',
                    'image' => asset('images/image_2.avif')
                ],
                [
                    'name' => 'Reolyy',
                    'description' => 'Reolyy exploite l’IA de pointe pour révolutionner le montage vidéo. De la correction automatique des couleurs à l’analyse intelligente du contenu, Reolyy aide les créateurs à produire des vidéos de qualité professionnelle en un temps record.',
                    'features' => [
                        'Suggestions de montage basées sur l’IA et détection automatique des scènes',
                        'Amélioration intelligente de la lumière, des couleurs et de la qualité audio',
                        'Modèles et styles professionnels pour une production rapide',
                        'Capacités d’exportation et de partage simplifiées',
                    ],
                    'tags' => ['Montage Vidéo', 'Amélioration IA', 'Outils Créatifs'],
                    'release' => 'Bientôt disponible',
                    'image' => asset('images/image_3.avif')
                ]
            ],
            'zh' => [
                [
                    'name' => 'Zarn',
                    'description' => 'Zarn 是我们旗舰级的 AI 生产力套件，旨在改变您的工作方式。通过结合智能自动化和直观的界面，Zarn 帮助您消除重复性任务，高效组织信息，并专注于高价值工作。',
                    'features' => [
                        '智能自动化重复任务和工作流程',
                        '与您现有的工具和平台无缝集成',
                        '从您的行为中学习的 AI，提供个性化建议',
                        '简洁直观的界面，专为专注与高效而设计',
                    ],
                    'tags' => ['生产力', 'AI 助手', '自动化'],
                    'release' => '即将推出',
                    'image' => asset('images/image_2.avif')
                ],
                [
                    'name' => 'Reolyy',
                    'description' => 'Reolyy 利用最前沿的 AI 技术彻底革新视频编辑。从自动颜色校正到智能内容分析，Reolyy 帮助创作者在极短的时间内制作出专业质量的视频。',
                    'features' => [
                        'AI 驱动的编辑建议和自动场景检测',
                        '智能增强光照、色彩和音频质量',
                        '专业模板和风格，快速制作',
                        '简化的导出和分享功能',
                    ],
                    'tags' => ['视频编辑', 'AI 增强', '创意工具'],
                    'release' => '即将推出',
                    'image' => asset('images/image_3.avif')
                ]
            ]
        ];

        $products = $products_lang[App::getLocale()];
        return view('home.products', compact('products'));
    }

    public function about()
    {
        // return about page view
        return view('home.about');
    }

    public function contact()
    {
        // return contact page view
        return view('home.contact');
    }

    public function earlyAccess()
    {
        // return early access page view
        return view('home.early-access');
    }

    public function earlyAccessSave(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:early_accesses,email',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:100',
            'interests' => 'required|array|min:1',
            'interests.*' => 'string',
        ]);

        EarlyAccess::create($validated);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your early access request has been submitted.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your early access request has been submitted.');
    }

    function privacyPolicy()
    {
        return view('home.privacy-policy');
    }

    function termsOfService()
    {
        return view('home.terms-of-service');
    }
}
