<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoDo - あなたの時間を有効活用</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #FAF8F1; /* 全体の背景色をライトベージュに */
            color: #333;
        }
        .navbar-brand {
            font-weight: bold;
            color: #8D7B68 !important; /* ブランド名をブラウン系に */
        }
        .header-bg {
            background-color: #FAF8F1; /* ヘッダーの背景色もライトベージュに */
        }
        .hero-section {
            background-color: #F1DEC9; /* ヒーローセクションの背景色を少し濃いベージュに */
            padding: 80px 0;
            border-bottom: 1px solid rgba(0,0,0,.05);
        }
        .hero-title {
            color: #5F5041; /* タイトルを深めのブラウンに */
            font-size: 3.5rem; /* タイトルを大きく */
            font-weight: bold;
        }
        .hero-subtitle {
            color: #6C757D; /* サブタイトルをグレーに */
            font-size: 1.5rem;
        }
        .btn-line {
            background-color: #A4907C; /* LINEボタンの色をブランドカラーに */
            border-color: #A4907C;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 50px; /* 丸みのあるボタン */
            transition: background-color 0.3s ease;
        }
        .btn-line:hover {
            background-color: #8D7B68; /* ホバーで少し濃く */
            border-color: #8D7B68;
            color: white;
        }
    </style>
</head>
<body>

    {{-- ヘッダー部分 --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light header-bg shadow-sm">
            <div class="container">
                <a class="navbar-brand fs-4" href="#">AutoDo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #5F5041;">サービス概要</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #5F5041;">使い方</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #5F5041;">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- タイトル（ヒーローセクション）部分 --}}
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="hero-title mb-3">AutoDo</h1>
            <p class="hero-subtitle mb-5">
                「いつのまにかスマホで数時間…」を、<br class="d-md-none">
                「ちょうどいい達成感」に変える。
            </p>
            <a href="#" class="btn btn-line">
                LINEで友だち登録する
            </a>
        </div>
    </section>

    {{-- ここから下のコンテンツが追加されます --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
