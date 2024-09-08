@yield('content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список персонажей</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .character-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .character-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .character-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            border: 4px solid #3498db;
        }

        .character-info {
            display: flex;
            flex-direction: column;
        }

        .character-title {
            margin: 0;
            color: #2c3e50;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .character-description {
            margin: 5px 0;
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        .character-stats {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .stat {
            margin-right: 20px;
            font-weight: 600;
            color: #34495e;
            font-size: 1rem;
        }

        #loading {
            text-align: center;
            color: #7f8c8d;
            font-size: 1.5rem;
        }

        .create-character-btn {
            display: block;
            padding: 15px 30px;
            margin: 30px auto;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1.2rem;
            text-align: center;
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .create-character-btn:hover {
            background-color: #2980b9;
            box-shadow: 0 12px 25px rgba(41, 128, 185, 0.4);
        }

        @media (max-width: 768px) {
            .character-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .character-image {
                margin-bottom: 15px;
            }

            .character-info {
                align-items: center;
            }

            .stat {
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>

<h1>Список персонажей</h1>
<div id="loading">Загрузка персонажей...</div>
<div id="character-list"></div>

<!-- Кнопка создания персонажа -->
<button id="create-character-btn" class="create-character-btn" style="display:none;">
    Создать персонажа
</button>

<script>
    // Функция для получения данных о персонажах
    async function fetchCharacters() {
        try {
            const response = await fetch('/api/characters'); // Путь к вашему API
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Ошибка при загрузке данных:', error);
            return [];
        }
    }

    // Функция для отображения списка персонажей
    function displayCharacters(characters) {
        const characterList = document.getElementById('character-list');
        const loadingIndicator = document.getElementById('loading');
        const createCharacterBtn = document.getElementById('create-character-btn');
        loadingIndicator.style.display = 'none'; // Скрыть индикатор загрузки

        if (characters.length === 0) {
            // Если персонажей нет, показываем кнопку создания персонажа
            createCharacterBtn.style.display = 'block';
            return;
        }

        characters.forEach(character => {
            const characterCard = document.createElement('div');
            characterCard.classList.add('character-card');

            const characterImage = document.createElement('img');
            characterImage.classList.add('character-image');
            characterImage.src = character.image;
            characterImage.alt = character.name;

            const characterInfo = document.createElement('div');
            characterInfo.classList.add('character-info');

            const characterTitle = document.createElement('h3');
            characterTitle.classList.add('character-title');
            characterTitle.textContent = character.name;

            const characterRace = document.createElement('p');
            characterRace.classList.add('character-description');
            characterRace.textContent = `Раса: ${character.race}`;

            const characterClass = document.createElement('p');
            characterClass.classList.add('character-description');
            characterClass.textContent = `Класс: ${character.class}`;

            const characterFaction = document.createElement('p');
            characterFaction.classList.add('character-description');
            characterFaction.textContent = `Фракция: ${character.faction}`;

            const characterStats = document.createElement('div');
            characterStats.classList.add('character-stats');

            const strengthStat = document.createElement('div');
            strengthStat.classList.add('stat');
            strengthStat.textContent = `Сила: ${character.strength}`;

            const agilityStat = document.createElement('div');
            agilityStat.classList.add('stat');
            agilityStat.textContent = `Ловкость: ${character.agility}`;

            const intelligenceStat = document.createElement('div');
            intelligenceStat.classList.add('stat');
            intelligenceStat.textContent = `Интеллект: ${character.intelligence}`;

            characterStats.appendChild(strengthStat);
            characterStats.appendChild(agilityStat);
            characterStats.appendChild(intelligenceStat);

            characterInfo.appendChild(characterTitle);
            characterInfo.appendChild(characterRace);
            characterInfo.appendChild(characterClass);
            characterInfo.appendChild(characterFaction);
            characterInfo.appendChild(characterStats);

            characterCard.appendChild(characterImage);
            characterCard.appendChild(characterInfo);

            characterList.appendChild(characterCard);
        });
    }

    // Обработчик нажатия на кнопку создания персонажа
    document.getElementById('create-character-btn').addEventListener('click', () => {
        alert('Функционал создания персонажа пока не реализован.');
    });

    // Инициализация и загрузка персонажей при загрузке страницы
    document.addEventListener('DOMContentLoaded', async () => {
        const characters = await fetchCharacters();
        displayCharacters(characters);
    });
</script>

</body>
</html>
